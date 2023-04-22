<!doctype html>
<html lang="en">
<?php include "config.php" ?>
<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <script src="js/checkEmail.js"></script>
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center" style="margin:20px;">
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    Đăng ký
                </div>
                <div class="col-lg-12 login-form">
                    <form  method="post">
                        <div class="form-group">
                            <label class="form-control-label">Tên người dùng</label>
                            <input type="text" name="m-name" class="form-control" id="username">
                        </div>

                      

                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" name="m-email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Mật khẩu</label>
                            <input type="password" name="m-password" class="form-control" id="password" i>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Ngày sinh</label>
                                    <input type="date" name="m-dop" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Giới tính</label>
                                    <select name="m-gender" class="form-control">
                                      <option value="">Chọn giới tính</option>
                                      <option value="male">Nam</option>
                                      <option value="female">Nữ</option>
                                   </select>
                                </div>
                            </div>
                        </div>

                       

                        <div class="col-12 login-btm login-button justify-content-center d-flex">
                            <input type="submit" name="btn-reg" class="btn btn-outline-primary" value="Đăng ký">
                        </div>
                    </form>
                    <?php 
                        if(isset($_POST['btn-reg'])){
                            $m_name = $_POST['m-name'];
                    
                            $m_email = $_POST['m-email'];
                            $m_password = $_POST['m-password'];
                            $m_dop = $_POST['m-dop'];
                            $m_gender = $_POST['m-gender'];
                            $m_hashed_password = md5($m_password);
                            $sql_insert_user= "INSERT INTO `users` ( `user_name`, `email`, `password`, `gender`, `dob`, `role`) VALUES ('$m_name', '$m_email', '$m_hashed_password', '$m_gender', '$m_dop',0 );";
                            mysqli_query($connect,$sql_insert_user);
                            header('location: dangnhap.php');
                        
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>