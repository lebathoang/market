<?php
session_start();

require_once dirname(__DIR__, 2) . '/connect.php';

if (!isset($_GET["MaDM"])) {
    $_SESSION["err"] = "Ban chua chon du lieu sua";
    // header("Location: ../component/index.php"); 
    // exit;
}

$id = intval($_GET["MaDM"]);

try {
    $sql = "select * from danhmuc where MaDM = $id";
    $db = getDatabaseConnection();
    $statement = $db->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $row = $statement->fetch();
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
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

    .topbar {
        height: 4.375rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .form {
        margin-left: 45px;
    }

    .buy {
        border: none;
        border-radius: 15px;
        background-color: rgb(0, 158, 0);
        margin-top: 8px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        padding: 5px 15px;
    }

    .logo {
        color: white;
        text-decoration: none;
    }
</style>

<body>
    <div class="d-flex" style="position: relative;">
        <!-- Sidebar -->
        <div class="sidebar col-lg-2 col-md-3" style="position: fixed;">
            <div class="sidebar-brand">
                <i class="fas fa-store me-2"></i>
                <a class="logo" href="../component/index.php">MARKET ADMIN</a>
            </div>
            <hr class="sidebar-divider">
            <ul class="nav flex-column">
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
                    <a class="nav-link" href="#users" onclick="changeTab('users')">
                        <i class="fas fa-fw fa-users me-2"></i>
                        Quản lý khách hàng
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
        </div>

        <!-- Main Content -->
        <div class="page-content col-lg-10 col-md-9" style="margin-left: 225px;">
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
            <div id="products" class="form tab-pane">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="dashboard-title">Cập nhập danh mục</h1>
                </div>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Nhập tên danh mục</td>
                            <td><input type="text" name="TenDM"></td>
                        </tr>
                        <tr>
                            <td>Nhập mô tả</td>
                            <td><input type="text" name="Mota"></td>
                        </tr>
                        <tr>
                            <td>Nhập số lượng</td>
                            <td><input type="text" name="Soluong"></td>
                        </tr>
                        <tr>
                            <td><input class="buy" type="submit" value="Cập nhật danh mục" name="save"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</html>

<?php


if (isset($_POST['save'])) {
    try {
        $sql = "UPDATE danhmuc  SET `TenDM` = :TenDM, `Mota` = :Mota, `Soluong` = :Soluong WHERE `MaDM` = $id";
        $db = getDatabaseConnection();
        $statement = $db->prepare($sql);

        $statement->bindParam(':TenDM', $TenDM);
        $statement->bindParam(':Mota', $Mota);
        $statement->bindParam(':Soluong', $Soluong);

        if (isset($_POST["save"])) {
            $TenDM = $_POST["TenDM"];
            $Mota = $_POST["Mota"];
            $Soluong = $_POST["Soluong"];
        }
        $statement->execute();
        echo "<script>window.location.href='./index.php';</script>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>