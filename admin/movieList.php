<?php
require_once 'config.php';



//Fetch movies from database...
$fetch_movies = mysqli_query($connect, "select * from movie");

if(isset($_POST['sort_movie'])){
	$fetch_movies = mysqli_query($connect, "select * from movie order by movie_name asc");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>movieList</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<style type="text/css">
						.content .main .box-account .image {
    display: flow-root;
}
a{
	text-decoration: none;
	color: white;
}
img {
    border-radius: 10% 0% 0% 10%;
}

.content .main .box-account {
	padding: 0px !important;
	margin-top: 30px !important;
}
button.br_ed_btn {
    margin-top: 125px;
}
.left {
    padding-top: 10px;
}
.button-b {
    float: right;
    text-align: right;
    margin: 30px 35px 10px 10px;
}
#tr_link{
	color: black;
}
#tr_link:hover{
	color: black;
	text-decoration: underline;
}

.content {
	grid-template-rows: auto auto !important;
}

		</style>
	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<div class="content">
				<div class="button-b">
				
					
				
					<button><a href="./addMovie.php">Thêm</a></button>
				</div>
				<div class="main">
					 <?php
            $count = 1;
			
              while($movie = mysqli_fetch_assoc($fetch_movies)){
                
             ?>
					<div class="box-account">
						<div class="image">
							<img src="../images/<?php echo $movie['movie_poster']; ?>" alt="user-image" />
						</div>
						<div class="left">
							<li>Tên phim: <?php echo $movie['movie_name']; ?></li>
							<li>Thời lượng: <?php echo $movie['movie_duration']; ?></li>
							<li>Ngày chiếu: <?php echo $movie['movie_date']; ?></li>
							<li>Đánh giá: <?php echo $movie['movie_rating']; ?></li>
							<li>Trailer Link: <a href="<?php echo $movie['movie_trailer']; ?>" id="tr_link"><?php echo $movie['movie_trailer']; ?></a></li>
						</div>
						<button class="br_ed_btn"><a href="movieEdit.php?id=<?php echo $movie['movie_id']; ?>">Sửa</a></button>
						
					</div>
					<br>
			<?php 
				++$count;
		} ?>					
				</div>
			</div>
		</div>
	</body>
</html>
