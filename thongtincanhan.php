<?php
    session_start();
    require_once __DIR__."/config/config.php";
    require_once __DIR__."/user/CustomerController.php";
    $customer = array();
    if (isset($_SESSION['idm'])) {
        $customerId = $_SESSION['idm'];
        $customerController = new CustomerController();
        $customer = $customerController->getCustomerById($customerId);
    } else {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Thông tin người dùng</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" hrf="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/userInformation.css">
</head>
<style>
    body {
        color: black;
    }
</style>
<body>

    <div class="navBar">
    </div>
    
    <main>

        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3">
            <div class="btn1">Thông tin khách hàng</div>
            <div class="btn2"><a class="btn-text" href="vedadat.php">Lịch sử đặt vé</a></div>
            <div class="btn2"><a class="btn-text" href="dangxuat.php">Đăng xuất</a></div>
            <img src="./images/userInformation1.png" width="400px" alt="cuộn phim">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="decor"></div>
            <div class="information" >
                <h1 class="title">THÔNG TIN KHÁCH HÀNG</h1>
                <!-- <hr> -->
                <div class="btnEdit">Thay đổi</div>
                <div class="infor">
                    <div>
                        <span class="inforPart">Tên: </span>
                        <span id="userName"><?php echo $customer["username"]; ?></span>
                    </div>
                    
                    <div>
                        <span class="inforPart">Email: </span>
                        <span id="userPhoneNumber"><?php echo $customer["email"]; ?></span>
                    </div>
            
                    <div>
                        <span class="inforPart">Ngày sinh: </span>
                        <span id="userEmail"><?php echo $customer["dob"]; ?></span>
                    </div>
            
                    <div>
                        <span class="inforPart">Giới tính: </span>
                        <span id="userBirth"><?php echo $customer["gender"]; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </main>


    
    <script src="./js/userInformation.js"></script>
</body>
</html>