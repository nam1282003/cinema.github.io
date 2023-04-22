<?php include "config.php" ;
ob_start();

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Instantiation and passing `true` enables exceptions
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thanh toán</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h2 class="text-center">Thanh toán</h2>
<h3>Thông tin về vé đặt</h3>
  <form method="post">
   <table class="table">
    <thead>
        <tr>
            <th>Địa điểm</th>
            <th>Rạp</th>
            <th>Phim</th>
            <th>Ghế</th>
            <th>Ngày xem</th>
            <th>Giờ xem</th>

            <th>Loại vé</th>
            <th>Thêm</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         <td><?php echo $_GET['diadiem']?></td>
         <td><?php echo $_GET['rap']?></td>
         <td><?php echo $_GET['phim']?></td>
         <td><?php echo $_GET['ghe']?></td>
         <td><?php echo $_GET['ngayxem']?></td>
         <td><?php echo $_GET['gioxem']?></td>
         <td><?php echo $_GET['loaive']?></td>
         <td><?php echo $_GET['them']?></td>
         <?php 
            $tenphim =$_GET['phim'];
            $fetch_movies = mysqli_query($connect, "select * from movie");
            $a = mysqli_fetch_assoc($fetch_movies);
           
         ?>
       
         <td><?php echo $a['price']?> VNĐ</td>
        </tr>

     
    </tbody>
 
   </table>
   <button type="submit" name="tt"class="btn btn-success">Thanh toán</button>
  </form>
  <?php if(isset($_POST['tt'])){
    $idm = $_SESSION['idm'];
    $ngayxem = $_GET['ngayxem'];
    
    $price = $a['price'];
    $ghe = $_GET['ghe'];
    $name = $_GET['phim'];
    $diadiem = $_GET['diadiem'];
    $rap = $_GET['rap'];
    $loaive = $_GET['loaive'];
    $khachhang = $_SESSION['musername'];

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'nam1282003@gmail.com';// SMTP username
    $mail->Password = 'ksryllwkztwxahyr'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    //Recipients
    $mail->setFrom('nam1282003@gmail.com', 'Mailer');
    $mail->addAddress('jnam1282003@gmail.com', 'Joe User'); // Add a recipient
    $mail->addAddress('nam1282003@gmail.com'); // Name is optional
    $mail->addReplyTo('inam1282003@gmail.com', 'Information');
    $mail->addCC('nam1282003@gmail.com');
    $mail->addBCC('nam1282003@gmail.com');
    // Attachments
  
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Thong tin dat ve online !';
    $mail->Body = '
  <p> Thông tin vé: </p> </br>
  <p> Ngày xem: '.$ngayxem.' </p> </br>
  <p> KH: '.$price.' </p> </br>
  <p> Giá: '.$khachhang.' </p> </br>
  <p> Ghế: '.$ghe.'</p> </br>
  <p> Tên phim: '.$name.' </p> </br>
  <p> Địa điểm: '.$diadiem .' </p> </br>
  <p> Rạp: '.$rap.' </p> </br>
  <p> Loại vé: '.$loaive .' </p> </br>    
    ';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    mysqli_query($connect,"INSERT INTO `transaction` (`movie_name`,`member_id`, `transactionDateTime`, `total_price`, `payment_type`, `status`, `points_earned`,`ghe`,`diadiem`,`rap`,`loaive`,`khachhang`) VALUES ('$name',$idm,'$ngayxem', $price, 'Online', 'Thành công',$price,$ghe,'$diadiem','$rap','$loaive','$khachhang')");
    header("location: camon.php");
  } ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>