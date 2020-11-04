


 <?php
ob_start();
session_start(); 
?>


<?php

$username="root";
$password="12345678";
$sunucu="localhost";
$database="blog";




$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
mysql_close($baglan);
echo  "Hata oluştu";
	exit();
}


$db=mysql_select_db($database);
if(!$db) { echo "Veritabanı hatası:".mysql_error(); echo "<br>";

echo  "Hata oluştu";
	

	exit();


	 }




?>