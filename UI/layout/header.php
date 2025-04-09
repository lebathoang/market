<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./header.css">
</head>

<style>
  header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #ffffff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  }

  .logo img {
    height: 50px;
  }

  .search-bar {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
  }

  .search-bar input {
    padding: 8px;
    border: none;
    outline: none;
    width: 420px;
  }

  .search-bar .search {
    background-color: #4caf50;
    color: white;
    width: 70px;
    cursor: pointer;
  }

  .header-icons {
    display: flex;
    gap: 15px;
  }

  .header-icons .choose {
    color: black;
    text-decoration: none;
  }

  .header-icons .icon {
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    padding: 3px 11px;
    border-radius: 11px;
    border: 1px solid white;
  }

  .header-icons .icon:hover {
    border: 1px solid silver;
  }

  .header-icons .icon i {
    padding-right: 5px;
  }

  .header-icons .icon .account {
    border: none;
    outline: none;
    background-color: transparent;
  }

  /* Navigation Menu */
  nav {
    background-color: #007bff;
    padding: 10px;
  }

  nav ul {
    display: flex;
    list-style: none;
    justify-content: space-between;
    margin: 0;
    padding: 0;
  }

  nav ul li {
    margin: 0 15px;
  }

  nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }
</style>

<body>
  <header>
    <div class="logo">
      <a href="../home/index.php">
        <img src="../../images/logo.png" alt="Evo Office">
      </a>
    </div>
    <div class="search-bar">
      <form action="../search/index.php" method="post">
        <input type="text" placeholder="Tìm kiếm...." name="keyword">
        <input type="submit" class="search" name="tim_kiem" value="Search"></input>
      </form>
    </div>
    <div class="header-icons">
      <a class="choose" href="../cart/index.php">
        <div class="icon">
          <i class="fa-solid fa-cart-plus"></i>
          <span>Giỏ hàng 0</span>
        </div>
      </a>
      <a class="choose" href="../like/index.php">
        <div class="icon">
          <i class="fa-solid fa-heart"></i>
          <span>Yêu thích 0</span>
        </div>
      </a>
      <div class="icon">
        <i class="fa-solid fa-user"></i>
        <div class="dropdown">
          <button class="account dropdown-toggle" type="none" data-bs-toggle="dropdown" aria-expanded="false">
            Tài khoản
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../sign_in/login/login.php">Đăng nhập</a></li>
            <li><a class="dropdown-item" href="../../sign_in/register/register.php">Đăng ký</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <nav>
    <ul>
      <li><a href="#">DANH MỤC SẢN PHẨM</a></li>
      <li><a href="#">TRANG CHỦ</a></li>
      <li><a href="#">GIỚI THIỆU</a></li>
      <li><a href="#">SẢN PHẨM MỚI</a></li>
      <li><a href="#">TIN TỨC</a></li>
      <li><a href="#">LIÊN HỆ</a></li>
      <li><a href="#">KHUYẾN MÃI</a></li>
      <li><a href="#">ĐẶT HÀNG</a></li>
    </ul>
  </nav>
</body>

</html>