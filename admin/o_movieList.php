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
		<title>o_movieList</title>
		<link rel="stylesheet" href="./styles/style.css" />
<style type="text/css">
  img.mv_img_list {
    width: 100px;
}
img.mv_tr_list {
    width: 400px;
    height: 85px;
}
a{
  text-decoration: none;
  color: white;
}
.mv_ed_btn{
  width: 5rem !important;
}
.\.button_m {
    float: right;
    text-align: right;
    margin: 5px 35px 10px 10px;
}
#tr_link{
	color: black;
}
</style>
	</head>
	<body>
  <?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<div class="content">
            <div class=".button_m">
              <form method="post" action="#" style="display: inline;">
						
						<button type="submit" name="sort_movie">Sort By</button>

					</form>
              <button><a href="addMovie.php">New Movie</a></button>
            </div>
          <table>
            <tr>
              <th width="2%">No.</th>
              <th width="40%">Movie Info</th>
              <th width="40%">Trailer</th>
              <th width="5%"></th>
            </tr>
            <?php
            $count = 1;
              while($movie = mysqli_fetch_assoc($fetch_movies)){
                
             ?>
              <tr>
              <td><?php echo $count;?></td>
              <td><img src="images/<?php echo $movie['movie_poster']; ?>" class="mv_img_list" align="left"> Tên phim <?php echo $movie['movie_name']; ?> <br>Duration: <?php echo $movie['movie_duration']; ?> <br> Publish Date: <?php echo $movie['movie_date']; ?> <br> Rating: <?php echo $movie['movie_rating']; ?></td>
              <td><a href="<?php echo $movie['movie_trailer']; ?>" id="tr_link"><?php echo $movie['movie_trailer']; ?></a></td>
              <td><button class="mv_ed_btn"><a href="movieEdit.php?id=<?php echo $movie['movie_id']; ?>">Edit</a></button></td>
            </tr>

             <?php  
             ++$count; 
              }
            ?>
           
          </table>
        </div>
		</div>
	</body>
</html>
