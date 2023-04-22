<?php
require_once 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking App</title>
<link rel="stylesheet" href="./styles/style.css" />
	<style type="text/css">
		.header{
			width: 100%;
			height: 40px;
			background-color: #fbebd8;
		}
		.header > h2 {
			text-align: center;
		}
		.header > time {
			float: right;
		}

		.body{
			float: right;
			width: 100%;
			height: 550px;
		}

		.buttons{
		
			padding: 10px;
			text-align: center;
		}
		.buttons > button {
			color: white;
			background-color: #e53c38;
			padding: 35px 35px 35px 35px;
			border-radius: 10px;
			border: none;
			font-size: 20px;
			margin: 15px;
		}
		   a{
      text-decoration: none;
      color: white;

    }
      .buttons > .lobtn{
    		color: white;
			background-color: #e53c38;
			padding: 10px;
			border-radius: 10px;
			border: none;
			font-size: 20px;
			margin: 15px;
    }
	</style>
</head>
<body>

<?php include_once "includes/navbar.php"?>
	
		
	<div class="body">
		<div class="buttons">
		<li class="active"><a href="./movieList.php">Danh sách phim</a></li>
		
			<button><a href="./movieList.php">Danh sách phim</a></button>
			<button><a href="./branchList.php">Rạp chiếu</a></button>
			<button><a href="./account-list.php">Khách hàng</button> <br>
		
			<button><a href="./giaodich.php">Vé</button>
			<button><a href="./profile.php">Thông tin cá nhân</button> <br><br>
			<button><a href="logout.php">Đăng xuất</button> <br><br>
			
		</div>
		<div>
			
		</div>
	</div>

</body>
</html>