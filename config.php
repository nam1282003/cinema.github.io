<?php
include_once(__DIR__."/config/config.php");
session_start();
$connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die('DB setting not valid...!');
?>
