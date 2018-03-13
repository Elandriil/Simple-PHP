<?php
require_once("header.php");
	//if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$aasta=  sanitizeString($_POST['aasta']);
		$poster=  sanitizeString($_POST['poster']);
		$pealkiri=  sanitizeString($_POST['pealkiri']);
		$riik=  sanitizeString($_POST['riik']);
		$rating=  sanitizeString($_POST['rating']);
		$trailer=  sanitizeString($_POST['trailer']);
		$pikkus=  sanitizeString($_POST['pikkus']);
		$kirjeldus=  sanitizeString($_POST['kirjeldus']);
		$zanr=  sanitizeString($_POST['zanr']);
		$insert='INSERT INTO film(aasta, poster_link, pealkiri, riik,'
		. 'rating, trailer_link, pikkus, kirjeldus, zanr_id) VALUES( '
		.$aasta.',
		"'.$poster.'",
		 "'.$pealkiri.'",
		 "'.$riik.'",
		 '.$rating.',
		 "'.$trailer.'",
		 '.$pikkus.',
		 "'.$kirjeldus.'",
		 '.$zanr.')';
			queryMysql($insert);
      
      header('Location:admin.php');	
      
      
		//}   
    