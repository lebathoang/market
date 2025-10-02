<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Hệ thống</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="./index.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" style="position: relative;">
        <!-- Sidebar -->
        <div class="sidebar col-lg-2 col-md-3" style="position: fixed;">
            <div class="sidebar-brand">
                <i class="fas fa-store me-2"></i>
                MARKET ADMIN
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
                                data-bs-toggle="dropdown" aria-expanded="true">
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
                                <li><a class="dropdown-item" href="./logout.php" ><i
                                            class="fas fa-sign-out-alt fa-sm me-2"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="content-wrapper">

                <!-- Products Tab -->
                <?php include("./mg_products.php") ?>

                <!-- Categories Tab -->
                <?php include("./categories.php")?>

                <!-- Client Tab -->
                <?php include("./mg_client.php")?>
                <!-- Reports Tab -->
                <?php include("./report.php")?>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>