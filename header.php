<?php 
include'admin/netting/baglan.php';
include'admin/fonksiyon.php';
/*if (isset($_POST['arama'])) {
	$aranan=$_POST['aranan'];
	$iceriksor=$db->prepare("SELECT * from icerik where icerik_ad LIKE '%$aranan%' order by icerik_id DESC ");
	$iceriksor->execute();
	$say=$iceriksor->rowCount();
  # code...
}
else{
	$iceriksor=$db->prepare("select * from icerik order by icerik_id DESC ");
	$iceriksor->execute();
	$say=$iceriksor->rowCount();

}*/
$menusor=$db->prepare("SELECT * from menu");
$menusor->execute();
$say=$menusor->rowCount();

$iceriksor=$db->prepare("SELECT * from icerik");
$iceriksor->execute();
$say123=$iceriksor->rowCount();

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr"> 
<head>
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Online Biyoloji">
	<meta name="author" content="Oguzhan Balçin">    
	<link rel="shortcut icon" href="<?php  echo $ayarcek['ayar_titlelogo']; ?>"> 

	<!-- FontAwesome JS-->
	<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/text.css">
	<link rel="stylesheet" href="assets/css/theme-elements.css">



	<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>


	<!-- Current Page CSS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	

</head> 
<body>
	<!--glow-->
	
	<header class="header text-center">

		<h1 class="blog-name pt-lg-4 mb-0" ><a href="index.php"><?php  echo $ayarcek['ayar_sitead']; ?></a></h1>

		<nav class="navbar navbar-expand-lg navbar-dark" >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
					<a href="index.php"> <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php  echo $ayarcek['ayar_logo']; ?>" alt="image" >		</a>	
					
					<div class="bio mb-3"><?php  echo $ayarcek['ayar_yazi']; ?><br></div><!--//bio-->
					
					<hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<?php 

					while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
						$menu_id=$menucek['menu_id'];
						$menu_url=$menucek['menu_url'];
						?>
						<li class="nav-item " >
							

							<a class="nav-link" href="<?php echo  $menucek['menu_url'];?>"><i class="<?php echo  $menucek['menu_seourl'];?>"></i><?php echo  $menucek['menu_ad'];?><span class="sr-only">(current)</span></a>
						</li>
					<?php  }?>
					
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fab fa-youtube fa-fw mr-2"></i>Youtube</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo $ayarcek['ayar_insta']; ?>"><i class="fab fa-instagram fa-fw mr-2"></i>Instagram</a>
					</li>
				</ul>
				
				
			</div>							
		</nav>

		<div class="footer text-center py-0 ">


			<small class="copyright">Designed by Oğuzhan Balçin</small>

		</div>
	</header>
	