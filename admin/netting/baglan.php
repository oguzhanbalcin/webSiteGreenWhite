<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=irem",'root','12345678');
	//echo "VB BB";
}

catch(PDOExpception $e)
{
	echo $e->getMessage();
}
?>
