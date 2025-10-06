<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

$limit = 5; // Số sản phẩm mỗi trang
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Lấy tổng số sản phẩm
$total_stmt = $db->query("SELECT COUNT(*) FROM danhmuc");
$total_products = $total_stmt->fetchColumn();
$total_pages = ceil($total_products / $limit);

// Lấy sản phẩm cho trang hiện tại
$stmt = $db->prepare("SELECT * FROM danhmuc ORDER BY MaDM DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .pd {
        text-decoration: none;
        color: white;
    }
</style>

<body>
    <div id="categories" class="tab-pane">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="dashboard-title">Quản lý danh mục</h1>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <a href="./add_categories.php" class="pd"><i class="fas fa-plus me-1"></i> Thêm danh mục mới</a>
            </button>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($category as $value) {
                            ?>
                                <tr>
                                    <td><?= htmlspecialchars($value['MaDM']) ?></td>
                                    <td><?= htmlspecialchars($value['TenDM']) ?></td>
                                    <td><?= htmlspecialchars($value['Mota']) ?></td>
                                    <td><?= htmlspecialchars($value['Soluong']) ?></td>
                                    <td><span class="badge bg-success">Hiển thị</span></td>
                                    <td class="action-buttons" style="display: flex;">
                                        <button class="btn btn-primary btn-sm"><a class="pd" href="./update_category.php?MaDM=<?php echo $value['MaDM'] ?>"><i
                                                    class="fas fa-edit"></i></a></button>
                                        <form action="" method="post">
                                            <button class="btn btn-danger btn-sm" onclick="deleteCartItem(<?= $value['MaDM'] ?>)"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page - 1 ?>">Trước</a>
                        </li>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>

                        <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

<script>
    function deleteCartItem(cartId) {
        if (confirm("Bạn muốn xóa sản phẩm này?")) {
            fetch('delete_category.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'MaDM=' + cartId
                })
                .then(res => res.text())
                .then(data => {
                    if (data === 'success') {
                        document.getElementById('cart-' + cartId).remove();
                        alert("Đã xóa thành công!");
                    } else {
                        alert("Lỗi xóa: " + data);
                    }
                });
        }
    }
</script>