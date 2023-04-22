<?php 
ob_start();
include "config.php";

?>
<!doctype html>
<html lang="en">
<head>
  <title>Đăng nhập</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/SignIn.css" rel="stylesheet">
</head>
<style>
    
    
        button.login {
    background: #f49803;
    border: #f49803;
    width: 200px;
}

    </style>
</style>
<body>
  <div class="login-box">
    <h2>Đăng nhập</h2>
    <form method="post">
      <div class="user-box">
        <input type="text" name="email" required>
        <label>Tài khoản</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Mật khẩu</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Ghi nhớ</label>
      </div>
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button name="login" class="login" type="submit"> Đăng nhập</button>
      </a>
    </form>
    <?php 
   
    if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $hashed_password = md5($password);
      $SQL = "SELECT * FROM `users` WHERE `user_name`='$email' AND `password`='$hashed_password'";
      $data = mysqli_query($connect,$SQL);
   
      $result = mysqli_fetch_assoc($data);
   
                  
      $success = $data->num_rows;
      
      if($success>=1){
                      $_SESSION['loginmm'] = 'a';
                      $_SESSION['musername'] = $result['user_name'];
                      $_SESSION['idm'] = $result['id'];
                      $_SESSION['role'] = $result['role'];
                    if($result['role']==1){
                      header("location: admin/homepage.php");
                    }
                    else{
                      header("location: index.php");
                    }
                  
      }
                  else{
                      echo " <script>
                      alert('Thông tin bạn nhập không chính xác !')
                  </script>";

                  }
    }
    ?>
    <div >  
      <a href="quenmatkhau.php" class="forgot-password">Quên mật khẩu?</a>
    </div>
    <div>
      <p class="text-center">Chưa có tài khoản? <a href="dangky.php" class="register">Đăng ký ngay</a></p>
  </div>
  <script src="../js/SignIn.js"></script>
</body>
</html>