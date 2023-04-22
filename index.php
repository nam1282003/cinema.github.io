
<?php include "includes/header.php"; ?>
<body>

    <!-- Home -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
             <!-- Box 1-->
            <div class="swiper-slide container">
            <img src="images/home1.jpg" alt="" srcset="">
            <div class="home-text" >
                <a href="#" class="play" id="play-button">
                    <i class='bx bx-play' ></i>                   
                </a>
            </div>
            <div id="video-container"></div>
            </div>
            <!-- Box 2 -->
            <div class="swiper-slide container">
            <img src="images/home2.jpg" alt="" srcset="">
            <div class="home-text">
                <a href="#" class="play">
                    <i class='bx bx-play' ></i>
                </a>
            </div>
            </div>
            <!-- Box 3 -->
            <div class="swiper-slide container">
            <img src="images/home3.jpg" alt="" srcset="">
            <div class="home-text">
                <a href="#" class="play">
                    <i class='bx bx-play' ></i>
                </a>
            </div>
            </div>
            <!-- Box 4 -->
            <div class="swiper-slide container">
                <img src="images/home4.jpg" alt="" srcset="">
                <div class="home-text">
                    <a href="page-1.html" class="play">
                        <i class='bx bx-play' ></i>
                    </a>
            </div>
            </div>
            <!-- Box 5 -->
            <div class="swiper-slide container">
                <img src="images/home5.jpg" alt="" srcset="">
                <div class="home-text">
            </div>
            </div>
            <!-- Box 6 -->
            <div class="swiper-slide container">
                <img src="images/home6.png" alt="" srcset="">
                <div class="home-text">
            </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- Movies -->
    <section class="movies" id="movies">
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
                    <a href="chitiet.php?id=<?php echo $movie['movie_id'] ?>"><h2 class="movie-title"><?php echo $movie['movie_name']; ?></h2></a>
                    <span class="movie-type">Thời lượng: <?php echo $movie['movie_duration']; ?> phút</span>
                    <a href="muave.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                        <a href="muave.php" class="buy-btn">Mua vé</a>
                    </a>
                </div>
            </div>
           <?php } ?>
            </div>
    <!-- Coming -->
    <section class="coming" id="coming">
        <h2 class="heading">Phim sắp chiếu</h2>
        <!-- Coming container -->
        <div class="swiper coming-container ">
            <div class="swiper-wrapper">
                <!-- Coming 1 -->
                <?php 
            $fetch_movies = mysqli_query($connect, "select * from movie where movie_case='coming soon'");
            while($movie = mysqli_fetch_assoc($fetch_movies)){
            ?>
            <div class="swiper-slide box">
                    <div class="box-img">
                    <a href="chitiet.php?id=<?php echo $movie['movie_id'] ?>"> <img src="images/<?php echo $movie['movie_poster']; ?>" alt="" srcset=""> </a>
                    </div>
                    <h3><?php echo $movie['movie_name']; ?></h3>
                    <span>Thời lượng: <?php echo $movie['movie_duration']; ?> phút</span>
                </div>
           
           <?php } ?>
                
             
            </div>        
        </div>
    </section>
    <?php include "includes/footer.php" ?>
