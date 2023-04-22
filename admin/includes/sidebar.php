
<div class="drawer">
				<?php if(isset($_SESSION['loged'])){
						echo  '<li class="active" style="color:white;">Xin chào '.$_SESSION["username"].' ! </a></li>';
					} ?>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "movieList.php")) {echo "class='active'";}?> ><a href="./movieList.php">Danh sách phim</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "account-list.php")) {echo "class='active'";}?> ><a href="./account-list.php">Danh sách người dùng</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "locked-users.php")) {echo "class='active'";}?> ><a href="./locked-users.php">Tài khoản đã khóa</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "branchList.php")) {echo "class='active'";}?> ><a href="./branchList.php">Rạp chiếu</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "giaodich.php")) {echo "class='active'";}?> ><a href="./giaodich.php">Vé</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "profile.php")) {echo "class='active'";}?> ><a href="./profile.php">Thông tin cá nhân</a></li>
				<li <?php if(strcmp(basename($_SERVER["REQUEST_URI"]), "logout.php")) {echo "class='active'";}?> > <a href="logout.php">Đăng xuất</a></li>
				

			</div>