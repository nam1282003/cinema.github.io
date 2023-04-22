<?php
require_once 'config.php';




$trans_details = mysqli_query($connect, "select * from transaction where transaction_id = '".$_GET['id']."' ");
	$trans = mysqli_fetch_assoc($trans_details);

	if(isset($_POST['update_transaction'])){
		// echo $_POST['new_status'];
		// exit();
		 mysqli_query($connect, "update transaction set status= '".$_POST['new_status']."' where transaction_id='".$_GET['id']."' ");

		 header('location:account-list.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>viewTransaction</title>
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
					<button type="submit" name="update_transaction" id="update_profile_btn">Lưu</button>
				</div>
				<div class="main">
					<div class="box">
						<div class="left">
							<li> ID:</li>
							<li>Thời gian:</li>
							<li>Account:</li>
							<li>Rạp và phim:</li>
							<li>Ghế:</li>
							<li>Tổng cộng:</li>
							<li>Loại thanh toán</li>
							<li>Trạng thái:</li>
						</div>
						
						<div class="right">
							<li><?php echo $trans['transaction_id'];?></li>
							<li><?php echo $trans['transactionDateTime'];?></li>
							<li>A123456</li>
							<li>Abc Movie</li>
							<li>Abc Seat</li>
							<li><?php echo $trans['total_price'];?></li>
							<li><?php echo $trans['payment_type'];?></li>
							<li>
								<select name="new_status" value="<?php echo $trans['status'];?>">
									<option>Update Status</option>
									<option value="Successful" <?php if($trans['status'] == "Successful"){ echo "selected"; } ?> >Successful</option>
									<option value="Refund" <?php if($trans['status'] == "Refund"){ echo "selected"; } ?> >Refund</option>
								</select>
								
							</li>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
