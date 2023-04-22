<?php
require_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>screen</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<style type="text/css">
			.draw-body .content .button-bar-screen {
   
    display: flex;
}
button {
    margin: 20px 134px 20px 20px;
}
a {
    color: white;
    text-decoration: none;
}
		</style>
	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<div class="content">
				<div class="button-bar-screen">
					<button class="delete">Xóa</button>
					<button><a href="addScreen.php">Thêm mới</a></button>
					<button>Lưu</button>
				</div>
				<div class="main">
					<div class="box-account screen">
						<div class="left">
							<li>ID chi nhánh:</li>
							<li>Phim:</li>
							<li>Địa chỉ:</li>
							<li>Rạp:</li>
							<li>Ngày:</li>
							<li>Giờ:</li>
						</div>
						<div class="right">
							<li>S00001</li>
							<li>M00001 The Batman Movie</li>
							<li>B0001 CFTv KLCC</li>
							<li>H0001 - 1</li>
							<li>3/3/2022</li>
							<li>1.30pm</li>
						</div>
					</div>
					<div class="screen-box">
						<div class="movie-screen">
							<div class="movie"></div>
							<div class="seats">
								<div class="row">
									<div class="number">1</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">1</div>
								</div>
								<div class="row">
									<div class="number">2</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">2</div>
								</div>
								<div class="row">
									<div class="number">3</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">3</div>
								</div>
								<div class="row">
									<div class="number">4</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">4</div>
								</div>
								<div class="path"></div>
								<div class="row">
									<div class="number">5</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat selected"></div>
									<div class="seat selected"></div>
									<div class="seat occupied"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">5</div>
								</div>
								<div class="row">
									<div class="number">6</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat occupied"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">6</div>
								</div>
								<div class="row">
									<div class="number">7</div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="seat"></div>
									<div class="number">7</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
