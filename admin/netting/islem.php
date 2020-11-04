<?php 
ob_start();
session_start();

include 'baglan.php';
if (isset($_POST['loggin'])) {
	$kullanici_ad=$_POST['kullanici_ad'];
$kullanici_password=md5($_POST['kullanici_password']);
if ($kullanici_ad && $kullanici_password) {
$kullanicisor=$db->prepare("SELECT * from kullanici_ where kullanici_ad=:ad and kullanici_password=:password ");
  $kullanicisor->execute(array(
    'ad'=> $kullanici_ad,
    'password'=> $kullanici_password

));
$verisay=$kullanicisor->rowCount();
if ($verisay>0) {
	$_SESSION['kullanici_ad']=$kullanici_ad;
	header('Location:../production/index.php');
}
else{
	$_SESSION['kullanici_ad']=$kullanici_ad;
	header('Location:../production/index.php');

}
}

}





if (isset($_POST['genelayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_yazi=:yazi,
		ayar_sitead=:sitead,
		ayar_title=:title
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'yazi'=>$_POST['ayar_yazi'],
		'sitead'=>$_POST['ayar_sitead'],
		'title'=>$_POST['ayar_title']
		


	));
	if ($update) {
		Header("Location:../production/genelayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/genelayar.php?durum=no");}
		}
}
if (isset($_POST['iletisimayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_mail=:mail,
		ayar_adres=:adres,
		ayar_ilce=:ilce,
		ayar_il=:il,
		ayar_mesai=:mesai
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'tel'=>$_POST['ayar_tel'],
		'gsm'=>$_POST['ayar_gsm'],
		'faks'=>$_POST['ayar_faks'],
		'mail'=>$_POST['ayar_mail'],
		'adres'=>$_POST['ayar_adres'],
		'ilce'=>$_POST['ayar_ilce'],
		'il'=>$_POST['ayar_il'],
		'mesai'=>$_POST['ayar_mesai']



	));
	if ($update) {
		Header("Location:../production/iletisim.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/iletisim.php?durum=no");}
		}
}
if (isset($_POST['apiayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_googlemap=:googlemap,
		ayar_analystic=:analystic
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'recapctha'=>$_POST['ayar_recapctha'],
		'googlemap'=>$_POST['ayar_googlemap'],
		'analystic'=>$_POST['ayar_analystic']


	));
	if ($update) {
		Header("Location:../production/apiayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/apiayar.php?durum=no");}
		}
}
if (isset($_POST['sosyalayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_face=:facebook,
		ayar_twitter=:twitter,
		ayar_youtube=:youtube,
		ayar_insta=:insta
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'facebook'=>$_POST['ayar_face'],
		'twitter'=>$_POST['ayar_twitter'],
		'youtube'=>$_POST['ayar_youtube'],
		'insta'=>$_POST['ayar_insta']


	));
	if ($update) {
		Header("Location:../production/sosyalayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/sosyalayar.php?durum=no");}
		}
}
if (isset($_POST['mailayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'smtphost'=>$_POST['ayar_smtphost'],
		'smtpuser'=>$_POST['ayar_smtpuser'],
		'smtppassword'=>$_POST['ayar_smtppassword'],
		'smtpport'=>$_POST['ayar_smtpport']


	));
	if ($update) {
		Header("Location:../production/mailayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/mailayar.php?durum=no");}
		}
}

if (isset($_POST['hakkimizdakaydet'])) {

	$hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:baslik,
		hakkimizda_icerik=:icerik,
		hakkimizda_video=:video,
		hakkimizda_vizyon=:vizyon,
		hakkimizda_misyon=:misyon
		WHERE hakkimizda_id=0");
	$update=$hakkimizdakaydet->execute(array(
		'baslik'=>$_POST['hakkimizda_baslik'],
		'icerik'=>$_POST['hakkimizda_icerik'],
		'video'=>$_POST['hakkimizda_video'],
		'vizyon'=>$_POST['hakkimizda_vizyon'],
		'misyon'=>$_POST['hakkimizda_misyon']



	));
	if ($update) {
		Header("Location:../production/hakkimizda.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/hakkimizda.php?durum=no");}
		}
}

if (isset($_POST['bizekaydet'])) {

	$bizekaydet=$db->prepare("INSERT INTO bize SET
		bize_ad=:ad,
		bize_mail=:mail,
		bize_konu=:konu,
		bize_yazi=:yazi,
		bize_tel=:tel
		 ");
	$update=$bizekaydet->execute(array(
		'ad'=>$_POST['bize_ad'],
		'mail'=>$_POST['bize_mail'],
		'konu'=>$_POST['bize_konu'],
		'yazi'=>$_POST['bize_yazi'],
		'tel'=>$_POST['bize_tel']



	));
	if ($update) {
		Header("Location:../../hakkimimda.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../../hakkimimda.php?durum=no");}
		}
}

if (isset($_POST['sliderkaydet'])) {

	$uploads_dir='../../uploads/slider';
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");



	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol

		");
	$insert=$kaydet->execute(array(
		'ad'=>$_POST['slider_ad'],
		'link'=>$_POST['slider_link'],
		'sira'=>$_POST['slider_sira'],
		'durum'=>$_POST['slider_durum'],
		'resimyol'=>$refimgyol




	));
	if ($insert) {
		Header("Location:../production/slider.php?durum=ok");}
		else{
			
		Header("Location:../production/slider.php?durum=no");
		}
}

if ($_GET['slidersil']=="ok") {
	if ($_FILES['slider_resimyol']["size"] > 0 ) {
		$resimsilunlink=$_POST['slider_resimyol'];
			 unlink("../../$resimsilunlink");

	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id'=>$_GET['slider_id']

	));
if ($kontrol) {

		Header("Location:../production/slider.php?durum=ok");}
		else{
			
		Header("Location:../production/slider.php?durum=no");
		}
}
	else{
    $sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id'=>$_GET['slider_id']));
	if ($kontrol) {

		Header("Location:../production/slider.php?durum=ok");}
		else{
			
		Header("Location:../production/slider.php?durum=no");
		}
	}
}

if (isset($_POST['sliderduzenle'])) {
	

if ($_FILES['slider_resimyol']["size"] > 0 ) {
    $uploads_dir='../../uploads/slider';
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$duzenle=$db->prepare("UPDATE slider SET
		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol
		WHERE slider_id={$_POST['slider_id']}");
	$update=$duzenle->execute(array(
		'ad'=>$_POST['slider_ad'],
		'link'=>$_POST['slider_link'],
		'sira'=>$_POST['slider_sira'],
		'durum'=>$_POST['slider_durum'],
		'resimyol'=>$refimgyol

	));
	 $slider_id=$_POST['slider_id'];
	if ($update) {
		$resimsilunlink=$_POST['slider_resimyol'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/sliderduzenle.php?slider_id=$slider_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/sliderduzenle.php?slider_id=$slider_id&durum=no");}
		}
	}


	 else{
		$duzenle=$db->prepare("UPDATE slider SET
		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum
		
		WHERE slider_id={$_POST['slider_id']}");
	$update=$duzenle->execute(array(
		'ad'=>$_POST['slider_ad'],
		'link'=>$_POST['slider_link'],
		'sira'=>$_POST['slider_sira'],
		'durum'=>$_POST['slider_durum']	
	));
	 $slider_id=$_POST['slider_id'];
	if ($update) {
		Header("Location:../production/sliderduzenle.php?slider_id=$slider_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/sliderduzenle.php?slider_id=$slider_id&durum=no");}
		}
	}
}

if (isset($_POST['icerikkaydet'])) {

	$uploads_dir='../../assets/images/icerik';
	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");

$tarih=$_POST['icerik_tarih'];
$saat=$_POST['icerik_saat'];
$zaman=$tarih." ".$saat;


	$kaydet=$db->prepare("INSERT INTO icerik SET
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman

		");
	$insert=$kaydet->execute(array(
		'ad'=>$_POST['icerik_ad'],
		'detay'=>$_POST['icerik_detay'],
		'durum'=>$_POST['icerik_durum'],
		'resimyol'=>$refimgyol,
		'zaman'=>$zaman




	));
	if ($insert) {
		Header("Location:../production/icerik.php?durum=ok");}
		else{
			
		Header("Location:../production/icerik.php?durum=no");
		}
}

if ($_GET['iceriksil']=="ok") {
	if ($_FILES['icerik_resimyol']["size"] > 0 ) {
		$resimsilunlink=$_POST['icerik_resimyol'];
			 unlink("../../$resimsilunlink");

	$sil=$db->prepare("DELETE from icerik where icerik_id=:icerik_id");
	$kontrol=$sil->execute(array(
		'icerik_id'=>$_GET['icerik_id']

	));
if ($kontrol) {

		Header("Location:../production/icerik.php?durum=ok");}
		else{
			
		Header("Location:../production/icerik.php?durum=no");
		}
}
	else{
    $sil=$db->prepare("DELETE from icerik where icerik_id=:icerik_id");
	$kontrol=$sil->execute(array(
		'icerik_id'=>$_GET['icerik_id']));
	if ($kontrol) {

		Header("Location:../production/icerik.php?durum=ok");}
		else{
			
		Header("Location:../production/icerik.php?durum=no");
		}
	}
}

if (isset($_POST['icerikduzenle'])) {
	
$tarih=$_POST['icerik_tarih'];
$saat=$_POST['icerik_saat'];
$zaman=$tarih." ".$saat;

if ($_FILES['icerik_resimyol']["size"] > 0 ) {
    $uploads_dir='../../assets/images/icerik';
	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$duzenle=$db->prepare("UPDATE icerik SET
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman

		WHERE icerik_id={$_POST['icerik_id']}");
	$update=$duzenle->execute(array(
		'ad'=>$_POST['icerik_ad'],
		'detay'=>$_POST['icerik_detay'],
		'durum'=>$_POST['icerik_durum'],
		'resimyol'=>$refimgyol,
		'zaman'=>$zaman



	));
	 $icerik_id=$_POST['icerik_id'];
	if ($update) {
		$resimsilunlink=$_POST['icerik_resimyol'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/icerikduzenle.php?icerik_id=$icerik_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/icerikduzenle.php?icerik_id=$icerik_id&durum=no");}
		}
	}


	 else{
		$duzenle=$db->prepare("UPDATE icerik SET
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_zaman=:zaman,
				icerik_kategori=:kategori


		
		WHERE icerik_id={$_POST['icerik_id']}");
	$update=$duzenle->execute(array(
		'ad'=>$_POST['icerik_ad'],
		'detay'=>$_POST['icerik_detay'],
		'keyword'=>$_POST['icerik_keyword'],
		'durum'=>$_POST['icerik_durum']	,
		'zaman'=>$zaman,
		'kategori'=>$_POST['icerik_kategori']

	));
	 $icerik_id=$_POST['icerik_id'];
	if ($update) {
		Header("Location:../production/icerikduzenle.php?icerik_id=$icerik_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/icerikduzenle.php?icerik_id=$icerik_id&durum=no");}
		}
	}
}
if (isset($_POST['menukaydet'])) {
	$kaydet=$db->prepare("INSERT INTO menu SET
		menu_ad=:ad,
		menu_url=:url,
		menu_seourl=:seourl,
		menu_detay=:detay,
		menu_durum=:durum

		");
	$insert=$kaydet->execute(array(
		
		'ad'=>$_POST['menu_ad'],
		'url'=>$_POST['menu_url'],
		'seourl'=>$_POST['menu_seourl'],
		'detay'=>$_POST['menu_detay'],
		'durum'=>$_POST['menu_durum']




	));
	if ($insert) {
		Header("Location:../production/menu.php?durum=ok");}
		else{
			
		Header("Location:../production/menu.php?durum=no");
		}
}
if ($_GET['menusil']=="ok") {

    $sil=$db->prepare("DELETE from menu where menu_id=:menu_id");
	$kontrol=$sil->execute(array(
		'menu_id'=>$_GET['menu_id']));
	if ($kontrol) {

		Header("Location:../production/menu.php?durum=ok");}
		else{
			
		Header("Location:../production/menu.php?durum=no");
		}
	
}
if (isset($_POST['menuduzenle'])) {
	$kaydet=$db->prepare("UPDATE  menu SET
		menu_ad=:ad,
		menu_url=:url,
		menu_seourl=:seourl,
		menu_detay=:detay,
		menu_durum=:durum

		WHERE menu_id={$_POST['menu_id']}");
	$insert=$kaydet->execute(array(
		'ad'=>$_POST['menu_ad'],
		'url'=>$_POST['menu_url'],
		'seourl'=>$_POST['menu_seourl'],
		'detay'=>$_POST['menu_detay'],
		'durum'=>$_POST['menu_durum']




	));
		 $menu_id=$_POST['menu_id'];

	if ($insert) {
		Header("Location:../production/menuduzenle.php?menu_id=$menu_id&durum=ok");}
		else{
			
		Header("Location:../production/menuduzenle.php?menu_id=$menu_id&durum=no");
		}
}

if (isset($_POST['logoduzenle'])) {
	


    $uploads_dir='../../assets/images/admin';
	@$tmp_name=$_FILES['ayar_logo']["tmp_name"];
	@$name=$_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizsayi4$name");
	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'logo'=>$refimgyol

	));
	if ($update) {
		$resimsilunlink=$_POST['eski_yol'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/genelayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/genelayar.php?durum=no");}
		}
	
}
if (isset($_POST['titlelogoduzenle'])) {
	


    $uploads_dir='../../assets/images/admin';
	@$tmp_name=$_FILES['ayar_titlelogo']["tmp_name"];
	@$name=$_FILES['ayar_titlelogo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizsayi4$name");
	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_titlelogo=:titlelogo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'titlelogo'=>$refimgyol

	));
	if ($update) {
		$resimsilunlink=$_POST['eski_yol1'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/genelayar.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/genelayar.php?durum=no");}
		}
	
}
if (isset($_POST['kresimduzenle'])) {
	


    $uploads_dir='../../assets\images';
	@$tmp_name=$_FILES['kullanici_resim']["tmp_name"];
	@$name=$_FILES['kullanici_resim']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizsayi4$name");
	$duzenle=$db->prepare("UPDATE kullanici_ SET
		kullanici_resim=:resim
		WHERE kullanici_id={$_POST['kullanici_id']}");
	$update=$duzenle->execute(array(
		'resim'=>$refimgyol

	));
	if ($update) {
		$resimsilunlink=$_POST['eski_yol'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/kullanici-profil.php?durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/kullanici-profil.php?durum=no");}
		}
	
}
if (isset($_POST['kategorikaydet'])) {
	$kaydet=$db->prepare("INSERT INTO kategori SET
		kategori_ad=:ad,
		kategori_alt=:alt

		");
	$insert=$kaydet->execute(array(
		'ad'=>$_POST['kategori_ad'],
		'alt'=>$_POST['kategori_alt']




	));
	if ($insert) {
		Header("Location:../production/kategori.php?durum=ok");}
		else{
			
		Header("Location:../production/kategori.php?durum=no");
		}
}
if ($_GET['kategorisil']=="ok") {

    $sil=$db->prepare("DELETE from kategori where kategori_id=:kategori_id");
	$kontrol=$sil->execute(array(
		'kategori_id'=>$_GET['kategori_id']));
	if ($kontrol) {

		Header("Location:../production/kategori.php?durum=ok");}
		else{
			
		Header("Location:../production/kategori.php?durum=no");
		}
	
}
if (isset($_POST['instakaydet'])) {

	

$tarih=$_POST['insta_tarih'];
$saat=$_POST['insta_saat'];
$zaman=$tarih." ".$saat;


	$kaydet=$db->prepare("INSERT INTO insta SET
		insta_data=:data,
		insta_acik=:acik,
		insta_zaman=:zaman

		");
	$insert=$kaydet->execute(array(
		'data'=>$_POST['insta_data'],
		'acik'=>$_POST['insta_acik'],
		'zaman'=>$zaman




	));
	if ($insert) {
		Header("Location:../production/insta.php?durum=ok");}
		else{
			
		Header("Location:../production/insta.php?durum=no");
		}
}

if ($_GET['instasil']=="ok") {

    $sil=$db->prepare("DELETE from insta where insta_id=:insta_id");
	$kontrol=$sil->execute(array(
		'insta_id'=>$_GET['insta_id']));
	if ($kontrol) {

		Header("Location:../production/insta.php?durum=ok");}
		else{
			
		Header("Location:../production/insta.php?durum=no");
		}
		}

if (isset($_POST['instaduzenle'])) {
	
$tarih=$_POST['insta_tarih'];
$saat=$_POST['insta_saat'];
$zaman=$tarih." ".$saat;
	
		$duzenle=$db->prepare("UPDATE insta SET
		insta_data=:data,
		insta_acik=:acik,
		insta_zaman=:zaman
		


		
		WHERE insta_id={$_POST['insta_id']}");
	$update=$duzenle->execute(array(
		'data'=>$_POST['insta_data'],
		'acik'=>$_POST['insta_acik'],
		'zaman'=>$_POST['insta_zaman']
		

	));
	 $insta_id=$_POST['insta_id'];
	if ($update) {
		Header("Location:../production/instaduzenle.php?insta_id=$insta_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/instaduzenle.php?insta_id=$insta_id&durum=no");}
		}
	}
if (isset($_POST['pdfkaydet'])) {

	$uploads_dir='../../uploads/pdf';
	@$tmp_name=$_FILES['pdf_yol']["tmp_name"];
	@$name=$_FILES['pdf_yol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");



	$kaydet=$db->prepare("INSERT INTO pdf SET
		pdf_durum=:durum,
		pdf_ad=:ad,
		pdf_yol=:yol

		");
	$insert=$kaydet->execute(array(
		'durum'=>$_POST['pdf_durum'],
		'ad'=>$_POST['pdf_ad'],
		'yol'=>$refimgyol



	));
	chmod($uploads_dir, 0777);

	if ($insert) {
		Header("Location:../production/pdf.php?durum=ok");}
		else{
			
		Header("Location:../production/pdf.php?durum=no");
		}
}
if (isset($_POST['pdfduzenle'])) {
	

if ($_FILES['pdf_yol']["size"] > 0 ) {
    $uploads_dir='../../uploads/pdf';
	@$tmp_name=$_FILES['pdf_yol']["tmp_name"];
	@$name=$_FILES['pdf_yol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$duzenle=$db->prepare("UPDATE pdf SET
		pdf_ad=:ad,
		pdf_durum=:durum,
		pdf_yol=:yol
		WHERE pdf_id={$_POST['pdf_id']}");
	$update=$duzenle->execute(array(
		'ad'=>$_POST['pdf_ad'],
		'durum'=>$_POST['pdf_durum'],
		'yol'=>$refimgyol

	));
	 $pdf_id=$_POST['pdf_id'];
	if ($update) {
		$resimsilunlink=$_POST['pdf_resimyol'];
			 unlink("../../$resimsilunlink");

		Header("Location:../production/pdfduzenle.php?pdf_id=$pdf_id&durum=ok");}
		else{
			if ($update) {
		Header("Location:../production/pdfduzenle.php?pdf_id=$pdf_id&durum=no");}
		}
	}}
	if ($_GET['pdfsil']=="ok") {

    $sil=$db->prepare("DELETE from pdf where pdf_id=:pdf_id");
	$kontrol=$sil->execute(array(
		'pdf_id'=>$_GET['pdf_id']));
	if ($kontrol) {

		Header("Location:../production/pdf.php?durum=ok");}
		else{
			
		Header("Location:../production/pdf.php?durum=no");
		}
		}
?>