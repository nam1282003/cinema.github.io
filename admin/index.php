<?php
session_start(); 
$admin =$_SESSION['role'];
if(isset($admin)&&$_SESSION['role']!=1)
{
echo "<script>alert('Trang này chỉ dành cho quản trị viên')</script>";
header("location:../index.php");

}
else{
    include_once "homepage.php";
}

?>
