<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Hệ thống Thị trường</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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

        .img-thumbnail {
            width: 55px;
            height: 55px;
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

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .modal-content {
            border: none;
            border-radius: 0.35rem;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .text-success {
            color: var(--secondary-color) !important;
        }

        .text-warning {
            color: var(--warning-color) !important;
        }

        .text-danger {
            color: var(--danger-color) !important;
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }

        .custom-tab {
            border: none;
            background-color: transparent;
            color: #6e707e;
            font-weight: 600;
            padding: 1rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .custom-tab.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
        }

        .custom-tab:hover:not(.active) {
            color: #4e73df;
            background-color: rgba(78, 115, 223, 0.05);
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            margin-right: 0.25rem;
        }
    </style>
</head>

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

                    <div class="row">
                        <!-- Recent Orders -->
                        <div class="col-lg-7 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Đơn hàng gần đây</h6>
                                    <a href="#orders" onclick="changeTab('orders')" class="btn btn-sm btn-primary">
                                        Xem tất cả
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Mã đơn</th>
                                                    <th>Khách hàng</th>
                                                    <th>Ngày đặt</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#ORD001</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>10/04/2025</td>
                                                    <td>1,500,000 VNĐ</td>
                                                    <td><span class="badge bg-warning text-dark">Đang xử lý</span></td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD002</td>
                                                    <td>Trần Thị B</td>
                                                    <td>09/04/2025</td>
                                                    <td>2,300,000 VNĐ</td>
                                                    <td><span class="badge bg-success">Hoàn thành</span></td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD003</td>
                                                    <td>Lê Văn C</td>
                                                    <td>08/04/2025</td>
                                                    <td>750,000 VNĐ</td>
                                                    <td><span class="badge bg-primary">Đang giao</span></td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD004</td>
                                                    <td>Phạm Thị D</td>
                                                    <td>07/04/2025</td>
                                                    <td>3,200,000 VNĐ</td>
                                                    <td><span class="badge bg-success">Hoàn thành</span></td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD005</td>
                                                    <td>Hoàng Văn E</td>
                                                    <td>06/04/2025</td>
                                                    <td>1,800,000 VNĐ</td>
                                                    <td><span class="badge bg-danger">Đã hủy</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Top Products -->
                        <div class="col-lg-5 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sản phẩm bán chạy</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>iPhone 14 Pro Max</span>
                                            <span>68%</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 68%"
                                                aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Samsung Galaxy S23 Ultra</span>
                                            <span>56%</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 56%"
                                                aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>MacBook Air M2</span>
                                            <span>48%</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 48%"
                                                aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Xiaomi Redmi Note 12</span>
                                            <span>37%</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                                aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Apple Watch Series 8</span>
                                            <span>32%</span>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 32%"
                                                aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Tab -->
                <div id="products" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Quản lý sản phẩm</h1>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                            <a href="../products/add_products.php" style="color: #fff;text-decoration: none;"><i class="fas fa-plus me-1"></i> Thêm sản phẩm mới</a>
                        </button>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
                            <div class="d-flex">
                                <select class="form-select me-2" id="categoryFilter">
                                    <option value="">Tất cả danh mục</option>
                                    <option value="1">Điện thoại</option>
                                    <option value="2">Laptop</option>
                                    <option value="3">Máy tính bảng</option>
                                    <option value="4">Phụ kiện</option>
                                </select>
                                <select class="form-select" id="statusFilter">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="1">Còn hàng</option>
                                    <option value="0">Hết hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Danh mục</th>
                                            <th>Giá bán</th>
                                            <th>Tồn kho</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeXHQhP5py9JusmS8bu3CuRvlAxyK2OOY51OUU_BCcjLP6TkDHQcY3FiwFo2uQikYUVss&usqp=CAU" alt="Product 1"
                                                    class="img-thumbnail"></td>
                                            <td>iPhone 14 Pro Max</td>
                                            <td>Điện thoại</td>
                                            <td>29,990,000 VNĐ</td>
                                            <td>25</td>
                                            <td><span class="badge bg-success">Còn hàng</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editProduct(1)"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(1)"><i
                                                        class="fas fa-trash"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewProduct(1)"><i
                                                        class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="https://azmobile.net/files/product/2025/01/18/678b63651943a.jpg" alt="Product 2"
                                                    class="img-thumbnail"></td>
                                            <td>Samsung Galaxy S23 Ultra</td>
                                            <td>Điện thoại</td>
                                            <td>27,990,000 VNĐ</td>
                                            <td>18</td>
                                            <td><span class="badge bg-success">Còn hàng</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editProduct(2)"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(2)"><i
                                                        class="fas fa-trash"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewProduct(2)"><i
                                                        class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img src="https://cdn2.fptshop.com.vn/unsafe/828x0/filters:format(webp):quality(75)/2022_7_21_637939929611057893_Macbook%20Air%20M2%20(8).jpg" alt="Product 3"
                                                    class="img-thumbnail"></td>
                                            <td>MacBook Air M2</td>
                                            <td>Laptop</td>
                                            <td>33,990,000 VNĐ</td>
                                            <td>12</td>
                                            <td><span class="badge bg-success">Còn hàng</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editProduct(3)"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(3)"><i
                                                        class="fas fa-trash"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewProduct(3)"><i
                                                        class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZODDHI90W0SQdz11fc21Qhoujv1rge_Cyxg&s" alt="Product 4"
                                                    class="img-thumbnail"></td>
                                            <td>Xiaomi Redmi Note 12</td>
                                            <td>Điện thoại</td>
                                            <td>5,490,000 VNĐ</td>
                                            <td>0</td>
                                            <td><span class="badge bg-danger">Hết hàng</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editProduct(4)"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(4)"><i
                                                        class="fas fa-trash"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewProduct(4)"><i
                                                        class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img src="https://product.hstatic.net/1000259254/product/ipad-pro-11-spacegray_f2f1e8db8eb54d2aa2e03be0c3dd5c54_master.jpg" alt="Product 5"
                                                    class="img-thumbnail"></td>
                                            <td>iPad Pro 11 inch</td>
                                            <td>Máy tính bảng</td>
                                            <td>19,990,000 VNĐ</td>
                                            <td>7</td>
                                            <td><span class="badge bg-success">Còn hàng</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editProduct(5)"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteProduct(5)"><i
                                                        class="fas fa-trash"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewProduct(5)"><i
                                                        class="fas fa-eye"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Sau</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Categories Tab -->
                <div id="categories" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Quản lý danh mục</h1>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                            <i class="fas fa-plus me-1"></i> Thêm danh mục mới
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
                                            <th>Số sản phẩm</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Điện thoại</td>
                                            <td>Các loại điện thoại di động</td>
                                            <td>48</td>
                                            <td><span class="badge bg-success">Hiển thị</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editCategory(1)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteCategory(1)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Laptop</td>
                                            <td>Máy tính xách tay</td>
                                            <td>35</td>
                                            <td><span class="badge bg-success">Hiển thị</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editCategory(2)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteCategory(2)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Máy tính bảng</td>
                                            <td>Các loại máy tính bảng</td>
                                            <td>22</td>
                                            <td><span class="badge bg-success">Hiển thị</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editCategory(3)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteCategory(3)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Phụ kiện</td>
                                            <td>Phụ kiện điện thoại, máy tính</td>
                                            <td>67</td>
                                            <td><span class="badge bg-success">Hiển thị</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editCategory(4)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteCategory(4)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Đồng hồ thông minh</td>
                                            <td>Các loại smartwatch</td>
                                            <td>18</td>
                                            <td><span class="badge bg-secondary">Ẩn</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editCategory(5)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm" onclick="deleteCategory(5)"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Tab -->
                <div id="orders" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Quản lý đơn hàng</h1>
                        <div>
                            <button class="btn btn-success me-2">
                                <i class="fas fa-file-export me-1"></i> Xuất Excel
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i> Tạo đơn hàng
                            </button>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
                            <div class="d-flex">
                                <select class="form-select me-2" id="orderStatusFilter">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="pending">Đang xử lý</option>
                                    <option value="shipping">Đang giao</option>
                                    <option value="completed">Hoàn thành</option>
                                    <option value="canceled">Đã hủy</option>
                                </select>
                                <input type="date" class="form-control" id="orderDateFilter">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="orderTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn</th>
                                            <th>Khách hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Phương thức</th>
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD001</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>10/04/2025</td>
                                            <td>COD</td>
                                            <td>1,500,000 VNĐ</td>
                                            <td><span class="badge bg-warning text-dark">Đang xử lý</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editOrder('ORD001')"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewOrder('ORD001')"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm" onclick="printOrder('ORD001')"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD002</td>
                                            <td>Trần Thị B</td>
                                            <td>09/04/2025</td>
                                            <td>Banking</td>
                                            <td>2,300,000 VNĐ</td>
                                            <td><span class="badge bg-success">Hoàn thành</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editOrder('ORD002')"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewOrder('ORD002')"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm" onclick="printOrder('ORD002')"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD003</td>
                                            <td>Lê Văn C</td>
                                            <td>08/04/2025</td>
                                            <td>COD</td>
                                            <td>750,000 VNĐ</td>
                                            <td><span class="badge bg-primary">Đang giao</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editOrder('ORD003')"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewOrder('ORD003')"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm" onclick="printOrder('ORD003')"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD004</td>
                                            <td>Phạm Thị D</td>
                                            <td>07/04/2025</td>
                                            <td>Momo</td>
                                            <td>3,200,000 VNĐ</td>
                                            <td><span class="badge bg-success">Hoàn thành</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editOrder('ORD004')"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewOrder('ORD004')"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm" onclick="printOrder('ORD004')"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD005</td>
                                            <td>Hoàng Văn E</td>
                                            <td>06/04/2025</td>
                                            <td>Banking</td>
                                            <td>1,800,000 VNĐ</td>
                                            <td><span class="badge bg-danger">Đã hủy</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editOrder('ORD005')"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewOrder('ORD005')"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm" onclick="printOrder('ORD005')"><i class="fas fa-print"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Sau</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Users Tab -->
                <div id="users" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Quản lý người dùng</h1>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                            <i class="fas fa-user-plus me-1"></i> Thêm người dùng
                        </button>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
                            <div class="d-flex">
                                <select class="form-select me-2" id="userRoleFilter">
                                    <option value="">Tất cả vai trò</option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Nhân viên</option>
                                    <option value="customer">Khách hàng</option>
                                </select>
                                <select class="form-select" id="userStatusFilter">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="1">Đang hoạt động</option>
                                    <option value="0">Bị khóa</option>
                                </select>
                            </div>
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
                                            <th>Ngày đăng ký</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Admin System</td>
                                            <td>admin@market.com</td>
                                            <td>0987654321</td>
                                            <td><span class="badge bg-danger">Admin</span></td>
                                            <td>01/01/2025</td>
                                            <td><span class="badge bg-success">Đang hoạt động</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editUser(1)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewUser(1)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-warning btn-sm" onclick="resetPassword(1)"><i class="fas fa-key"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nguyễn Văn A</td>
                                            <td>nguyenvana@example.com</td>
                                            <td>0987654322</td>
                                            <td><span class="badge bg-primary">Khách hàng</span></td>
                                            <td>15/03/2025</td>
                                            <td><span class="badge bg-success">Đang hoạt động</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editUser(2)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewUser(2)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-warning btn-sm" onclick="resetPassword(2)"><i class="fas fa-key"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Trần Thị B</td>
                                            <td>tranthib@example.com</td>
                                            <td>0987654323</td>
                                            <td><span class="badge bg-primary">Khách hàng</span></td>
                                            <td>18/03/2025</td>
                                            <td><span class="badge bg-success">Đang hoạt động</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editUser(3)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewUser(3)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-warning btn-sm" onclick="resetPassword(3)"><i class="fas fa-key"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lê Văn C</td>
                                            <td>levanc@example.com</td>
                                            <td>0987654324</td>
                                            <td><span class="badge bg-warning text-dark">Nhân viên</span></td>
                                            <td>20/03/2025</td>
                                            <td><span class="badge bg-success">Đang hoạt động</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editUser(4)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewUser(4)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-warning btn-sm" onclick="resetPassword(4)"><i class="fas fa-key"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Phạm Thị D</td>
                                            <td>phamthid@example.com</td>
                                            <td>0987654325</td>
                                            <td><span class="badge bg-primary">Khách hàng</span></td>
                                            <td>25/03/2025</td>
                                            <td><span class="badge bg-secondary">Bị khóa</span></td>
                                            <td class="action-buttons">
                                                <button class="btn btn-primary btn-sm" onclick="editUser(5)"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-info btn-sm" onclick="viewUser(5)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-warning btn-sm" onclick="resetPassword(5)"><i class="fas fa-key"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Sau</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Reports Tab -->
                <div id="reports" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Báo cáo thống kê</h1>
                        <div>
                            <button class="btn btn-success me-2">
                                <i class="fas fa-file-excel me-1"></i> Xuất Excel
                            </button>
                            <button class="btn btn-danger">
                                <i class="fas fa-file-pdf me-1"></i> Xuất PDF
                            </button>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Doanh thu theo thời gian</h6>
                                    <div>
                                        <select class="form-select" id="revenueTimeFilter">
                                            <option value="week">7 ngày qua</option>
                                            <option value="month" selected>30 ngày qua</option>
                                            <option value="quarter">Quý này</option>
                                            <option value="year">Năm nay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="revenueChart" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Đơn hàng theo trạng thái</h6>
                                    <div>
                                        <select class="form-select" id="orderTimeFilter">
                                            <option value="week">7 ngày qua</option>
                                            <option value="month" selected>30 ngày qua</option>
                                            <option value="quarter">Quý này</option>
                                            <option value="year">Năm nay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie">
                                        <canvas id="orderStatusChart" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Doanh thu theo danh mục</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="categoryRevenueChart" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Top khách hàng</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Khách hàng</th>
                                                    <th>Số đơn</th>
                                                    <th>Tổng chi tiêu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>12</td>
                                                    <td>15,800,000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td>Trần Thị B</td>
                                                    <td>8</td>
                                                    <td>12,500,000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td>Lê Văn C</td>
                                                    <td>7</td>
                                                    <td>9,700,000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td>Phạm Thị D</td>
                                                    <td>5</td>
                                                    <td>8,500,000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td>Hoàng Văn E</td>
                                                    <td>4</td>
                                                    <td>7,200,000 VNĐ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div id="settings" class="tab-pane">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="dashboard-title">Cài đặt hệ thống</h1>
                        <button class="btn btn-primary" id="saveSettings">
                            <i class="fas fa-save me-1"></i> Lưu cài đặt
                        </button>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Cài đặt chung</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="siteName" class="form-label">Tên cửa hàng</label>
                                            <input type="text" class="form-control" id="siteName" value="Market Shop">
                                        </div>
                                        <div class="mb-3">
                                            <label for="siteDescription" class="form-label">Mô tả</label>
                                            <textarea class="form-control" id="siteDescription" rows="3">Cửa hàng thiết bị điện tử chính hãng</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="siteEmail" class="form-label">Email liên hệ</label>
                                            <input type="email" class="form-control" id="siteEmail" value="contact@market.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="sitePhone" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control" id="sitePhone" value="0987654321">
                                        </div>
                                        <div class="mb-3">
                                            <label for="siteAddress" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" id="siteAddress" value="123 Đường ABC, Quận XYZ, TP. HCM">
                                        </div>
                                        <div class="mb-3">
                                            <label for="siteLogo" class="form-label">Logo</label>
                                            <input type="file" class="form-control" id="siteLogo">
                                            <div class="mt-2">
                                                <img src="https://via.placeholder.com/150x50" alt="Logo" class="img-thumbnail">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Cài đặt thanh toán</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Phương thức thanh toán</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="paymentCOD" checked>