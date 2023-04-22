<?php include "config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đặt vé xem phim trực tuyến</title>

   
 
    </head>
      <body>
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       
 
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>
    <style>.rowss {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-content: flex-end;
    margin-top: 100px;
    flex-wrap: wrap;
}</style>
    <!-- Navbar -->
    <header>
        <a href="./" class="logo"> 
            <i class='bx bxs-movie'></i> Rạp Chiếu Phim
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <!-- menu -->
        <ul class="navbar">
            <li><a href="./" class="home-active">Trang chủ</a>></li>
            <li><a href="phimdangchieu.php">Phim đang chiếu</a>></li>
            <li><a href="phimsapchieu.php">Phim sắp chiếu</a>></li>

        </ul>
        <?php
     
        if(isset($_SESSION['loginmm'])){
            echo ' <a href="thongtincanhan.php" class="btn">Thông tin cá nhân</a>';
        } 
        else{
            echo '<a href="dangnhap.php" class="btn">Đăng nhập</a>';
        }?>
        

    </header>
    <link rel="stylesheet" href="css/home.css">