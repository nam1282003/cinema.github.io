
    
<?php include "includes/header.php"; ?><!-- Play movie Container -->
    <div class="play-container conatiner">
    <?php 
    $id= $_GET['id'];
            $fetch_movies = mysqli_query($connect, "select * from movie where movie_id=$id");
           $movie = mysqli_fetch_assoc($fetch_movies);
           
                ?>
        <!-- Play Image -->
         <img src="images/<?php echo $movie['movie_poster']; ?>" alt="" class="play-img">
         <!-- play Text -->
        <div class="play-text">
             <h2><?php echo $movie['movie_name']; ?></h2>
             <!-- rating -->
             <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
             </div>
             <!-- Tags -->
             <div class="tags">
                <span>Kinh Dị</span>
                <span>Phiêu Lưu</span>
             </div>
             <!-- Trailer button -->
             <a href="muave.php" class="btn-book">Mua vé</a>

        </div>
        <!-- Play button -->
        <i class='bx bx-right-arrow play-movie'></i>
        <!-- Video Container -->
        <div class="video-container">
            <!-- Video-box -->
            <div class="video-box">
                <iframe id="myvideo" src="https://www.youtube.com/embed/RVsGFHpNB8E "  allowfullscreen></iframe>
                <!-- closer video icon -->
                <i class='bx bx-x close-video'></i>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="about-movie">
        <h2><?php echo $movie['movie_name']; ?></h2>
        <p><b>Thể loại:</b>&nbsp Kinh Dị, &nbsp Phiêu Lưu</p>
        <p><b>Khởi chiếu:</b><?php echo $movie['movie_date']; ?></p>
        <p><b>Thời lượng:</b><?php echo $movie['movie_duration']; ?> phút</p>

        <p><b>Rated:</b>&nbsp C13 - PHIM ĐƯỢC PHỔ BIẾN ĐẾN NGƯỜI XEM TỪ ĐỦ 13 TUỔI TRỞ LÊN (13+)</p>
        <h2>Nội dung phim</h2>
        <p><?php echo $movie['movie_desc']; ?></p>
        <!-- Movies Cast -->
       
        </div>
   <!-- link  swiper file-->
   <?php include "includes/footer.php" ?>
</html>