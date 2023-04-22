

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Danh sách vé</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<link rel="stylesheet" href="./styles/usersManagement.css">

	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<div class="mainBody"> 
        <div class="infor">
            <div class="title">LỊCH SỬ ĐẶT VÉ</div>
            <table border="0" style="border-collapse: collapse; margin: auto">
                <tr class="header">
										<td>Mã vé</td>
										<td>Khách hàng </td>
										<td>Thời gian đặt </td>
										<td>Tên phim</td>
										<td>Ghế</td>
										<td>Địa điểm</td>
										<td>Giá vé</td>
										<td>Trạng thái</td>
                </tr>
								<?php
										require_once 'config.php';
										$membersList= mysqli_query($connect, "SELECT * FROM transaction" );
										while($member = mysqli_fetch_assoc($membersList)){
									?>
							<tr class="item">
								<td><?php echo $member['transaction_id'] ?></td>
								<td><?php echo $member['khachhang'] ?></td>
								<td><?php echo $member['transactionDateTime'] ?></td>
								<td><?php echo $member['movie_name'] ?></td>
								<td><?php echo $member['ghe'] ?></td>
								<td><?php echo $member['diadiem'] ?></td>
								<td><?php echo $member['points_earned'] ?></td>
								
							
								<td><?php echo $member['status'] ?></td>
							</tr>
						<?php } ?>
					</table>
        </div>
    </div>
		</div>
	</body>
</html>
