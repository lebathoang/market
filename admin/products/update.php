<?php
session_start();

require("../../connect.php");

if (!isset($_GET["id"])) {
    $_SESSION["err"] = "Ban chua chon du lieu sua";
    header("Localhost: management.php");
}

$id = intval($_GET["id"]);

try {
    $sql = "select * from products where id = $id";
    $db = getDatabaseConnection();
    $statement = $db->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $row = $statement->fetch();
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
}
// ALTER TABLE taikhoan MODIFY COLUMN id INT AUTO_INCREMENT;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Hệ thống Thị trường</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    :root {
        --primary-color: #4e73df;
        --secondary-color: #1cc88a;
        --danger-color: #e74a3b;
        --warning-color: #f6c23e;
        --info-color: #36b9cc;
    }

    .sidebar {
        min-height: 100vh;
        background: linear-gradient(180deg, var(--primary-color) 10%, #224abe 100%);
        color: #fff;
        transition: all 0.3s;
        position: fixed;
    }

    .sidebar .nav-link {
        color: rgba(255, 255, 255, 0.8);
        padding: 1rem;
        font-weight: 500;
    }

    .sidebar .nav-link:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar .nav-link.active {
        color: #fff;
        font-weight: 700;
    }

    .sidebar .sidebar-brand {
        height: 4.375rem;
        padding: 1.5rem 1rem;
        font-size: 1.2rem;
        font-weight: 800;
        color: #fff;
        text-align: center;
    }

    .sidebar-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        margin: 1rem 0;
    }

    .page-content {
        flex: 1;
        margin-left: 225px;
    }

    .card-stats {
        border-left: 4px solid;
    }

    .card-stats.primary {
        border-left-color: var(--primary-color);
    }

    .card-stats.success {
        border-left-color: var(--secondary-color);
    }

    .card-stats.warning {
        border-left-color: var(--warning-color);
    }

    .card-stats.danger {
        border-left-color: var(--danger-color);
    }

    .dashboard-title {
        font-weight: 700;
        color: #5a5c69;
    }

    .dashboard-subtitle {
        font-size: 1.1rem;
        color: #6e707e;
    }

    .topbar {
        height: 4.375rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .content-wrapper {
        min-height: calc(100vh - 4.375rem);
        padding: 1.5rem;
        background-color: #f8f9fc;
    }
</style>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-lg-2 col-md-3">
            <div class="sidebar-brand">
                <i class="fas fa-store me-2"></i>
                MARKET ADMIN
            </div>
            <hr class="sidebar-divider">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard" onclick="changeTab('dashboard')">
                        <i class="fas fa-fw fa-tachometer-alt me-2"></i>
                        Tổng quan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products" onclick="changeTab('products')">
                        <i class="fas fa-fw fa-box me-2"></i>
                        Quản lý sản phẩm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#categories" onclick="changeTab('categories')">
                        <i class="fas fa-fw fa-list me-2"></i>
                        Quản lý danh mục
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#orders" onclick="changeTab('orders')">
                        <i class="fas fa-fw fa-shopping-cart me-2"></i>
                        Quản lý đơn hàng
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#users" onclick="changeTab('users')">
                        <i class="fas fa-fw fa-users me-2"></i>
                        Quản lý người dùng
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reports" onclick="changeTab('reports')">
                        <i class="fas fa-fw fa-chart-bar me-2"></i>
                        Báo cáo thống kê
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#settings" onclick="changeTab('settings')">
                        <i class="fas fa-fw fa-cog me-2"></i>
                        Cài đặt hệ thống
                    </a>
                </li>
            </ul>
            <hr class="sidebar-divider">
            <div class="text-center mb-3">
                <button class="btn btn-light btn-sm" onclick="logout()">
                    <i class="fas fa-sign-out-alt me-1"></i> Đăng xuất
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="page-content col-lg-10 col-md-9">
            <!-- Topbar -->
            <nav class="topbar navbar navbar-expand navbar-light bg-white">
                <div class="container-fluid">
                    <button id="sidebarToggle" class="btn btn-link d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>

                    <form class="d-none d-sm-inline-block ms-auto me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>

                    <ul class="navbar-nav ms-auto ms-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle fa-fw me-1"></i>
                                <span>Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm me-2"></i> Hồ sơ</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm me-2"></i> Cài đặt</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm me-2"></i> Nhật ký</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="logout()"><i
                                            class="fas fa-sign-out-alt fa-sm me-2"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="content-wrapper">
                <!-- Dashboard -->
                <div id="dashboard" class="tab-pane active">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Tổng quan hệ thống</h1>
                        <button class="btn btn-primary btn-sm" onclick="exportReport()">
                            <i class="fas fa-download me-1"></i> Xuất báo cáo
                        </button>
                    </div>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-stats primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Doanh thu (Tháng)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">40,000,000 VNĐ</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-stats success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Doanh thu (Năm)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">350,000,000 VNĐ</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-stats warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Đơn hàng xử lý</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-stats danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Khách hàng mới</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">26</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Update Products</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Enter product name</td>
                            <td><input type="text" name="product_name"></td>
                        </tr>
                        <tr>
                            <td>Enter image</td>
                            <td><input type="file" name="image_product"></td>
                        </tr>
                        <tr>
                            <td>Enter price</td>
                            <td><input type="text" name="price"></td>
                        </tr>
                        <tr>
                            <td>Enter quantity</td>
                            <td><input type="text" name="quantity"></td>
                        </tr>
                        <tr>
                            <td>Enter decription</td>
                            <td><input type="text" name="decription"></td>
                        </tr>
                        <tr>
                            <td>Enter type</td>
                            <td><input type="text" name="type"></td>
                        </tr>
                        <tr>
                            <td>Enter classify</td>
                            <td><input type="text" name="classify"></td>
                        </tr>
                        <tr>
                            <td><input class="btn btn-primary btn-sm" type="submit" value="Update" name="update"></td>
                            <td>
                                <a href="../Admin/admin.php" class="btn btn-primary btn-sm">Back</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST["update"])) {
    try {
        $sql = "UPDATE `products` SET `name` = :name, `image` = :image, `price` = :price, `quantity` = :quantity, `decription` = :decription, `type` = :type, `classify` = :classify WHERE `id` = $id";
        $db = getDatabaseConnection();
        $statement = $db->prepare($sql);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":quantity", $quantity);
        $statement->bindParam(":decription", $decription);
        $statement->bindParam(":type", $type);
        $statement->bindParam(':classify', $classify);

        if (isset($_POST["update"])) {
            $name = $_POST["product_name"];
            $image = $_FILES["image_product"]["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $decription = $_POST["decription"];
            $type = $_POST["type"];
            $classify = $_POST["classify"];
        }
        $statement->execute();
        header("Location: management.php");
        move_uploaded_file($_FILES["image_product"]["tmp_name"], "../../images/" . $_FILES["image_product"]["name"]);
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
    }
}
?>