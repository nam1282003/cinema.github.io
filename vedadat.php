<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vé đã đặt</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userInformation.css">
</head>
<?php include "includes/header.php"; ?>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            main {
                display: block;
                justify-content: space-around;
            }
        }

        body {
            color: black;
        }
    </style>
    <div class="navBar"></div>
    <main>

        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3">
            <div class="btn2"><a href="thongtincanhan.php">Thông tin cá nhân</a></div>
            <div class="btn1"><a href="vedadat.php">Lịch sử đặt vé</a></div>
            <div class="btn2"><a href="dangxuat.php">Đăng xuất</a></div>
            <img src="images/userInformation1.png" width="400px" alt="cuộn phim">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="decor"></div>
            <div class="information" id="veds" >
                <h1 class="title">THÔNG TIN VÉ</h1>
                <!-- <hr> -->       
                <div class="infor">
                <div>
                <?php
                        $id = $_SESSION['idm'];
                    
                        $membersList= mysqli_query($connect, "SELECT * FROM `transaction` WHERE `member_id`=$id  ORDER BY `transaction_id` DESC LIMIT 1" );
                        $member = mysqli_fetch_assoc($membersList);
                        if (isset($member)) {
                            echo '
                            <span class="inforPart">Mã vé: </span>
                            <span id="userPhoneNumber">'.$member["transaction_id"].'</span><br>
                            <span class="inforPart">Thời gian đặt: </span>
                            <span id="userPhoneNumber">'.$member["transactionDateTime"].'</span><br>
                            <span class="inforPart">Tên phim: </span>
                            <span id="userPhoneNumber">'.$member["movie_name"].'</span><br>
                            <span class="inforPart">Giá vé: </span>
                            <span id="userPhoneNumber">'.$member["points_earned"].'</span><br>
                            <span class="inforPart">Trạng thái: </span>
                            <span id="userPhoneNumber">'.$member["status"].'</span><br>
                        ';
                        } else {
                            echo '<span class="inforPart">Không có thông tin để hiển thị</span>';
                        }
                        ?> 
                    </div>
                    <div>
            </div>
        </div>
    </main>



    
 
</body>
</html>