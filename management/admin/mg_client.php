<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

$limit = 5; // Số sản phẩm mỗi trang
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Lấy tổng số sản phẩm
$total_stmt = $db->query("SELECT COUNT(*) FROM khachhang");
$total_products = $total_stmt->fetchColumn();
$total_pages = ceil($total_products / $limit);

// Lấy sản phẩm cho trang hiện tại
$stmt = $db->prepare("SELECT * FROM khachhang ORDER BY MaKH DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$client = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="users" class="tab-pane">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="dashboard-title">Quản lý khách hàng</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($client as $value) {
                            ?>
                                <tr>
                                    <td><?= htmlspecialchars($value['MaKH']) ?></td>
                                    <td><?= htmlspecialchars($value['Ho']) . " " . htmlspecialchars($value["Ten"]) ?></td>
                                    <td><?= htmlspecialchars($value['Email']) ?></td>
                                    <td><?= htmlspecialchars($value['Sdt']) ?></td>
                                    <td><span class="badge bg-primary">Khách hàng</span></td>
                                    <td><span class="badge bg-success">Đang hoạt động</span></td>
                                </tr>
                            <?php
                            }
                            ?>
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

</html>