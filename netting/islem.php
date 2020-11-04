<?php 
include 'baglan.php';
 
if (isset($_POST['ayarkaydet'])) {
	$id=0;
	$ayarkaydet=mysql_query("update ayarlar set ayar_title='".$_POST['ayar_title']."',ayar_description='".$_POST['ayar_description']."',ayar_keywords='".$_POST['ayar_keywords']."', ayar_telefon='".$_POST['ayar_telefon']."',ayar_facebook='".$_POST['ayar_facebook']."',ayar_twitter='".$_POST['ayar_twitter']."',ayar_insta='".$_POST['ayar_insta']."',ayar_footer='".$_POST['ayar_footer']."',ayar_adres='".$_POST['ayar_adres']."',ayar_mail='".$_POST['ayar_mail']."' where ayar_id='$id'");
	if (mysql_affected_rows()) {
		header("Location:../ayarlar.php?durum=ok");
		# code...
	}
	else{

		header("Location:../ayarlar.php?durum=no");
	}
}

if (isset($_POST['loggin'])) {
	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=($_POST['admin_sifre']);
	
	if ($admin_kadi&&$admin_sifre) {
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);
		if ($verisay>0) {
			$_SESSION['admin_kadi']=$admin_kadi;
			header('Location:../index.php');
		}
		else{

			header('Location:../login.php?login=no');
		}
	}
}

if (isset($_POST['menukaydet'])) {
	$menuekle=mysql_query("insert into menuler (menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')");
	if (mysql_affected_rows()) {

		header('Location:../menuekle.php?durum=ok');
	}
	else{

		header('Location:../menuekle.php?durum=no');
	}
}

if (isset($_POST['menuduzenle'])) {
	$menu_id=$_POST['menu_id'];
	
	$menuduzenle=mysql_query("update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$menu_id'");
	if (mysql_affected_rows()) {
		header("Location:../menuduzenle.php?durum=ok&menu_id=$menu_id");
		# code...
	}
	else{

		header("Location:../menuduzenle.php?durum=no&menu_id=$menu_id");
	}
}
if ($_GET['menusil']=="ok") {
	$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");
	if (mysql_affected_rows()) {
		header("Location:../menuler.php?durum=ok");
		# code...
	}
	else{

		header("Location:../menuler.php?durum=no");
	}
}

if (isset($_POST['sayfakaydet'])) {
	$zaman=date('Y-m-d H:i');
	$uploads_dir='../uploads/haber';
	$tmp_name=$_FILES['sayfagorsel']["tmp_name"];
	$name=$_FILES['sayfagorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$sayfaekle=mysql_query("insert into sayfalar (sayfa_resimyol,sayfa_ad,sayfa_sira,sayfa_icerik,sayfa_anasayfa,sayfa_tarih,sayfa_yazar) VALUES ('".$refimgyol."','".$_POST['sayfa_ad']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_anasayfa']."','".$zaman."','".$_POST['sayfa_yazar']."')");
	if (mysql_affected_rows()) {

		header('Location:../sayfalar.php?durum=ok');
	}
	else{

		header('Location:../sayfalar.php?durum=no');
	}
}

if ($_GET['sayfasil']=="ok") {
	$sayfasil=mysql_query("delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");
	if (mysql_affected_rows()) {
		header("Location:../sayfalar.php?durum=ok");
		# code...
	}
	else{

		header("Location:../sayfalar.php?durum=no");
	}
}


if (isset($_POST['sayfaduzenle'])) {
	$sayfa_id=$_POST['sayfa_id'];
	
	
	$sayfaduzenle=mysql_query("update sayfalar set sayfa_ad='".$_POST['sayfa_ad']."',sayfa_icerik='".$_POST['sayfa_icerik']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."',sayfagorsel='".$_POST['sayfagorsel']."',sayfa_yazar='".$_POST['sayfa_yazar']."' where sayfa_id='$sayfa_id'");
	if (mysql_affected_rows()) {
		header("Location:../sayfaduzenle.php?durum=ok&sayfa_id=$sayfa_id");
		# code...
	}
	else{

		header("Location:../sayfaduzenle.php?durum=no&sayfa_id=$sayfa_id");
	}
}

if (isset($_POST['sliderekle'])) {

	$uploads_dir='../uploads/slider';
	$tmp_name=$_FILES['slidegorsel']["tmp_name"];
	$name=$_FILES['slidegorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$sliderekle=mysql_query("insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad) VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."') ");
	if (mysql_affected_rows()) {
		header("Location:../sliderekle.php?durum=ok");
		# code...
	}
	else{

		header("Location:../sliderekle.php?durum=no");
	}

}
if ($_GET['slidersil']=="ok") {
	$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");
	if (mysql_affected_rows()) {
		header("Location:../slider.php?durum=ok");
		# code...
	}
	else{

		header("Location:../slider.php?durum=no");
	}
}


if (isset($_POST['sliderduzenle'])) {
	$slider_id=$_POST['slider_id'];
	
	$sliderduzenle=mysql_query("update slider set slidegorsel='".$_POST['slidegorsel']."',slider_ad='".$_POST['slider_ad']."',slider_url='".$_POST['slider_url']."',slider_sira='".$_POST['slider_sira']."',slider_ana='".$_POST['slider_ana']."' where slider_id='$slider_id'");
	if (mysql_affected_rows()) {
		header("Location:../sliderduzenle.php?durum=ok&lider_id=$slider_id");
		# code...
	}
	else{

		header("Location:../sliderduzenle.php?durum=no&slider_id=$slider_id");
	}
}

if (isset($_POST['anasayfakaydet'])) {
	$zaman=date('Y-m-d H:i');
	$uploads_dir='../uploads/haber';
	$tmp_name=$_FILES['anasayfagorsel']["tmp_name"];
	$name=$_FILES['anasayfagorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name,"$uploads_dir/$benzersizad$name");
	$anasayfaekle=mysql_query("insert into anasayfa (anasayfa_ad,anasayfa_resimyol,anasayfa_icerik,anasayfa_anasayfa,anasayfa_kategori,anasayfa_kad,anasayfa_tarih) VALUES ('".$_POST['anasayfa_ad']."','".$refimgyol."','".$_POST['anasayfa_icerik']."','".$_POST['anasayfa_anasayfa']."','".$_POST['anasayfa_kategori']."','".$_POST['anasayfa_kad']."','".$zaman."')");
	if (mysql_affected_rows()) {

		header('Location:../anasayfa.php?durum=ok');
	}
	else{

		header('Location:../anasayfa.php?durum=no');
	}
}
if ($_GET['anasayfasil']=="ok") {
	$sayfasil=mysql_query("delete from anasayfa where anasayfa_id='".$_GET['anasayfa_id']."'");
	if (mysql_affected_rows()) {
		header("Location:../anasayfa.php?durum=ok");
		# code...
	}
	else{

		header("Location:../anasayfa.php?durum=no");
	}
}

if (isset($_POST['anasayfaduzenle'])) {
	$anasayfa_id=$_POST['anasayfa_id'];
	$anasayfaduzenle=mysql_query("update anasayfa set anasayfa_ad='".$_POST['anasayfa_ad']."',anasayfa_icerik='".$_POST['anasayfa_icerik']."',anasayfa_anasayfa='".$_POST['anasayfa_anasayfa']."',anasayfa_kategori='".$_POST['anasayfa_kategori']."',anasayfa_kad='".$_POST['anasayfa_kad']."' where anasayfa_id='$anasayfa_id'");
	
	if (mysql_affected_rows()) {
		header("Location:../anasayfaduzenle.php?durum=ok&anasayfa_id=$anasayfa_id");
		# code...
	}
	else{

		header("Location:../anasayfaduzenle.php?durum=no&anasayfa_id=$anasayfa_id");
	}
}
?>