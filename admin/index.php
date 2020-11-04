<?php 
ob_start();
session_start();

if (isset($_SESSION['kullanici_ad'])) {
	header("Location:production");
	# code...
}else{
	header("Location:production/login.php");
}

 ?>