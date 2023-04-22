<?php
require_once 'config.php';



$br_id = $_GET['id'];
	$branch_details = mysqli_query($connect, "select * from branch where branch_id = '".$br_id."' ");
	$branh_details = mysqli_query($connect, "select * from branch where branch_id = '".$br_id."' ");
	$screen_details = mysqli_query($connect, "select * from screening inner join movie on screening.movie_id = movie.movie_id where screening.branch_id = '".$_GET['br_id']."' ");

		$branch = mysqli_fetch_assoc($branch_details);

	  if (isset($_POST['update_branch'])) {

	  	
	  	// for ($i=0; $i < count($_POST['hall_capacity']) ; $i++) { 
	  	// 	echo $_POST['hall_capacity'][$i]."<br>".$_POST['hall_type'][$i]."<br>".$_POST['hall_no'][$i]."<br>".$_POST['hall_id'][$i]."<br>";
	  	// }
	  	// exit();

    $filename = $_FILES["branch_image"]["name"];
    $tempname = $_FILES["branch_image"]["tmp_name"];    
        $folder = "images/".$filename;

       // echo $_POST['branch_id']."<br>".$_POST['branch_name']."<br>".$_POST['branch_address']."<br>".$filename."'<br>'".$_POST['hall_id']."<br><br<br>".$_POST['hall_id']."'<br>'".$_POST['hall_num']."'<br>'".$_POST['hall_type']."'<br>'".$_POST['hall_capacity'];
       // exit();
  
        // Execute branch query
       mysqli_query($connect, "update branch set branch_id='".$_POST['branch_id']."', branch_name='".$_POST['branch_name']."', branch_address='".$_POST['branch_address']."', branch_image='".$filename."' where branch_id='".$br_id."' ");

        //Execute hall query
        	for ($i=0; $i < count($_POST['hall_capacity']) ; $i++) { 
	  		
	  		 mysqli_query($connect, "update hall set hall_no = '".$_POST['hall_no'][$i]."', hall_type = '".$_POST['hall_type'][$i]."', hall_capacity = '".$_POST['hall_capacity'][$i]."' where hall_id = '".$_POST['hall_id'][$i]."' ");
	  	}
	  	
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      header('location:branchList.php');
  }

    if(isset($_POST['delete_branch'])){
  	mysqli_query($connect, "delete from branch where branch_id = '".$br_id."' ");
  	header('location:branchList.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>branchEdit</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<style type="text/css">
						.content .main .box-account .image {
    display: flow-root;
}
a{
	text-decoration: none;
	color: white;
}

label {
    border-radius: 15px;
    font-size: 1.3rem;
    background-color: #da310f;
    color: #fff;
    font-weight: 500;
    padding: 10px 45px 10px 45px;
    line-height: 45px;
}

		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
				<script>
			// To preview movie poster
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory

    }
  };

/*
  $(document).ready(function(){
  $("#no_of_hall").change(function(){
  	var hall = "<tr><td><input type='text' name='hall_id' style='width:60px; font-size: 1.3rem; border: none;'required></td><td><input type='text' name='hall_num' style='width:60px; font-size: 1.3rem; border: none;'required></td><td><input type='text' name='hall_type' style='width:150px; font-size: 1.3rem; border: none;''  required></td><td><input type='text' name='hall_capacity' style='width:60px; font-size: 1.3rem; border: none;' required></td></tr>";
   	$('#halls').append(hall);
  });
});  */
</script>
		</style>
	</head>
	<body>
		<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<form method="post" enctype="multipart/form-data">
			<div class="content">
				<div class="button-bar-account">
					<button class="delete" type="submit" name="delete_branch">Xóa</button>
					<button type="reset">Reset</button>
					<button type="submit" name="update_branch">Lưu</button>
				</div>
				<div class="main">
					<div class="box-account">
						<div class="left">
							<li>Mã chi nhánh:</li>
							<li>Tên:</li>
							<li>Địa chỉ:</li>
							<li>Số</li>
						</div>
						<div class="right">
							<li><input type="text" name="branch_id" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_id']; ?>" readonly></li>
							<li><input type="text" name="branch_name" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_name']; ?>" required></li>
							<li><input type="text" name="branch_address" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['branch_address']; ?>" required></li>
							<li><input type="text" name="no_of_hall" id="no_of_hall" style="width:550px; font-size: 1.3rem; border: none;" value="<?php echo $branch['no_of_halls']; ?>"readonly></li>
						</div>
						<div class="image">
							<img src="./images/<?php echo $branch['branch_image']; ?>" alt="branch_image" id="output" />
							<input type="file" name="branch_image" id="branch_image" hidden accept="image/*" onchange="loadFile(event)" >
							<label for="branch_image">Đổi</label>
						</div>
					</div>
					<br>
					
					
				</form>
				</div>
			</div>
		</div>
	</body>
</html>
