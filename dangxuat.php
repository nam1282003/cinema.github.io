<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['loginmm']);
unset($_SESSION['idm']);
unset($_SESSION['musername']);
header("location: index.php");
	?>