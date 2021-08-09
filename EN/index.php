<?php
	if(isset($_GET["p"])){
		$page=$_GET["p"];
	} else{
		$page="Anasayfa";
	}

	switch($page){
		case "Anasayfa":
		$template="anasayfa.php";
		break;
		case "iu-100K";
		$template="detay.php";
		$include_page_name="iu-100K.php";
		$title="IU-100K";
		$detay_header_img='../files/reistanbulultrawebfull/1.jpg';
		$gallery_name='';
		break;
		case "iu-60K";
		$template="detay.php";
		$include_page_name="iu-60K.php";
		$title="IU-60K";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		case "iu-30K";
		$template="detay.php";
		$include_page_name="iu-30K.php";
		$title="IU-30K";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		case "iu-15K";
		$template="detay.php";
		$include_page_name="iu-15K.php";
		$title="IU-15K";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		case "empty";
		$template="detay.php";
		$include_page_name="empty.php";
		$title="empty";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		case "Contact";
		$template="iletisim.php";
		$include_page_name="empty.php";
		$title="Contact";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		case "about-us";
		$template="hakkimizda.php";
		$include_page_name="empty.php";
		$title="Hakkımızda";
		$detay_header_img='../files/uploads/detay.jpg';
		$gallery_name='';
		break;
		default:
		$template="anasayfa.php";
	}

	$tarih_1='June 16, 2021';
	$tarih_2='June 18, 2021';
	$tarih_3='June 19, 2021';

require_once __DIR__ .'/'.$template;
?>
