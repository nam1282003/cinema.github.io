
<?php include "includes/header.php"; ?>
 <!-- Home -->
 <style>
    section#movies {
    position: relative;
    top: 45px;
    margin-bottom: 107px;
}
 </style>
 <section class="movies mt-5" id="movies" >
        <h2 class="heading">Phim đang chiếu</h2>
        <!-- Movies conatiner -->
        <div class="movies-container">
        <?php 
            $fetch_movies = mysqli_query($connect, "select * from movie where movie_case='now showing'");
            while($movie = mysqli_fetch_assoc($fetch_movies)){
            ?>
            <div class="movie-box">
                <img src="images/<?php echo $movie['movie_poster']; ?>" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title"><?php echo $movie['movie_name']; ?></h2>
                    <span class="movie-type">Thời lượng: <?php echo $movie['movie_duration']; ?> phút</span>
                    <a href="page-1.html" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                        <a href="muave.php" class="buy-btn">Mua vé</a>
                    </a>
                </div>
            </div>
           <?php } ?>
        </div>
    </section>
    <!-- Coming -->
    <?php include "includes/footer.php" ?>