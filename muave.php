<?php include "includes/header.php"; ?>
<style>
  .container {
    position: relative;
    top: 199px;
    margin-bottom: 100px;
}
</style>
  <div class="container">
    
<form action="thanhtoan.php" method="get">
    <div class="row">
      <div class="col-md-12">
        <h4>Địa điểm</h4>
        <div id="locations">
          <select style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="diadiem" id="">
            <option value="TP. HCM">TP. HCM</option>
            <option value="TP. HCM">Hà Nội</option>
          </select>
       
        </div>
      </div> 
    </div>

    <div class="row">
      <div class="col-md-3">
        <h4>Rạp</h4>
        <div id="cinemas">
        <select style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="rap" id="">
          
     
          <?php $fetch_branches = mysqli_query($connect, "select * from branch ");
          
             while($branch = mysqli_fetch_assoc($fetch_branches)){
 ?>
         <option value="<?php echo $branch['branch_name'] ?>"><?php echo $branch['branch_name'] ?></option>
           
             <?php }
             
?>             </select></div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <h4>Phim</h4>
        <div id="movies">

        <select style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="phim" id="">
          
     
          <?php $fetch_branches = mysqli_query($connect, "select * from movie ");
          
             while($movie = mysqli_fetch_assoc($fetch_branches)){
 ?>
         <option value="<?php echo $movie['movie_name'] ?>"><?php echo $movie['movie_name'] ?></option>
           
             <?php }
             
?>             </select>
        </div>
      </div>
 
    </div>
    


    <div class="row">
      <div class="col-md-6">
        <h4>Chọn ghế</h4>
        <div id="seats">
        <input style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="ghe" type="number">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h4>Ngày xem</h4>
        <div id="dates" style="display: flex; flex-direction: row;">
        <input style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="ngayxem" type="date">
      </div>
      
      </div>
      <div class="col-md-12">
        <h4>Giờ xem</h4>
        <div id="dates" style="display: flex; flex-direction: row;">
        <input style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="gioxem" type="time">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <h4>Loại vé</h4>
        <div id="movies">

        <select style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="loaive" id="">
        
         <option value="2D"> 2D</option>
         <option value="3D"> 3D</option>

                 </select>
        </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <h4>Combo miễn phí</h4>
        <div id="movies">

        <select style="display: block;
    width: 100%;padding: 0.7rem 1.4rem;
    background: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;" name="them" id="">
        
         <option value="Nước"> Nước + khăn giấy</option>
         <option value="Bỏng ngô">Bỏng ngô</option>

                 </select>
        </div>
        </div>
      </div>
      <div class="col-md-12">
      
        <div id="dates" style="display: flex; flex-direction: row;">
        <?php 
            if(isset($_SESSION['loginmm'])){
                echo '  <button type="submit"  class="btn btn-primary mt-5">Đặt vé</button>';
            }
            else{
              echo ' <a class="btn btn-danger" href="dangnhap.php">Đăng nhập</a>';
            }
        ?>
     
      </div>
      
      </div>
    </div>
  </div>
     
  </form>
     
      </div>

   
<?php include "includes/footer.php"; ?>