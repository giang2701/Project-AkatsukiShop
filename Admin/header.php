<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
      .header{
        width: 1210px;
      }
      .main_home img{
          width: 1270px;
      }
      .sidebar-brand {
        margin-bottom: -30px;
      }
      .sidebar-brand span{
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <!-- <span class="material-icons-outlined">search</span> -->
        </div>
        <div class="header-right">
          <a href="../index.php"><i class="fa-solid fa-power-off" style="font-size: 30px; font-weight: bold;"></i></a>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <img src="../img/logo.jpg" alt="" width="60px" style="border-radius: 20px;">
            <span>Akuttshi</span>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>
<!-- header danh mục -->
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="index.php" >
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="index.php?act=listdm" >
              <span class="material-icons-outlined">inventory_2</span> Danh mục
            </a>
          </li>
          <!-- <li class="sidebar-list-item">
            <a href="index.php?act=listct" target="_blank">
              <span class="material-icons-outlined">inventory_2</span> Danh muc Chi tiết 
            </a>
          </li> -->
          <li class="sidebar-list-item">
            <a href="index.php?act=listsp" >
              <span class="material-icons-outlined">fact_check</span> Sản phẩm
            </a>
          </li>
          <!-- <li class="sidebar-list-item">
            <a href="index.php?act=listsize" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Size
            </a>
          </li> -->
          <li class="sidebar-list-item">
            <a href="index.php?act=qlbl">
              <span class="material-icons-outlined">shopping_cart</span> Bình luận
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="index.php?act=listtk">
              <span class="material-icons-outlined">poll</span> Tài khoản
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="index.php?act=donhang">
              <span class="material-icons-outlined">settings</span> Đơn hàng
            </a>
          </li>
        </ul>
      </aside>
<!-- end -->