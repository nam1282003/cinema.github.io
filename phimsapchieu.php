
<?php include "includes/header.php"; ?>
<section class="coming mt-5" id="coming">
        <h2 class="heading">Phim sắp chiếu</h2>
        <style>
            section#coming {
    position: relative;
    top: 57px;
    margin-bottom: 66px;
}
        </style>
        <!-- Coming container -->
        <div class="swiper coming-container ">
            <div class="swiper-wrapper">
            <?php 
            $fetch_movies = mysqli_query($connect, "select * from movie where movie_case='coming soon'");
            while($movie = mysqli_fetch_assoc($fetch_movies)){
            ?>
            <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/<?php echo $movie['movie_poster']; ?>" alt="" srcset="">
                    </div>
                    <h3><?php echo $movie['movie_name']; ?></h3>
                    <span>Thời lượng: <?php echo $movie['movie_duration']; ?> phút</span>
                </div>
           
           <?php } ?>
            </div>        
        </div>
    </section>
    <?php include "includes/footer.php" ?>