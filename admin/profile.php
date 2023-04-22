<?php
require_once 'config.php';




$user_details = mysqli_query($connect, "select * from users where id = '".$_SESSION['idm']."' ");
	$user = mysqli_fetch_assoc($user_details);

	if(isset($_POST['update_profile'])){
		 mysqli_query($connect, "update users set password='".$_POST['new_password']."' where id='".$_SESSION['idm']."' ");

		 header('location:profile.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>profile</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<style type="text/css">
			.content .main .box {

    margin: 25px 2rem auto 2rem;
}
button#update_profile_btn {
    margin: 40px 10px 10px 10px;
}
		</style>
	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<form method="post" >
			<div class="content">
				<div class="button-bar">
					<button type="submit" name="update_profile" id="update_profile_btn">Lưu</button>
				</div>
				<div class="main">
					<div class="box">
						<div class="left">
							<li>Tài khoản:</li>
							<li>Tên:</li>
							<li>Mã khách hàng:</li>
							<li>Email:</li>
							<li>Số điện thoại:</li>
							<li>Mật khẩu mới:</li>
						</div>
						
						<div class="right">
							<li><?php echo $user['user_name'];?></li>
							<li><?php echo $user['first_name']." ".$user['last_name'];?></li>
							<li>A123456</li>
							<li><?php echo $user['email'];?></li>
							<li>0123456789</li>
							<li>

								<input type="text" name="new_password" id="pwd1" />
								&nbsp; &nbsp; &nbsp; Nhập lại mật khẩu:
								<input
									type="text"
									name="confirm_password"
									id="pwd2"
								/>
							</li>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
