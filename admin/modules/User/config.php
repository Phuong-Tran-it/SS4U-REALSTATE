<?php 
	session_start();
	require_once __DIR__. "/../../GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("353101058758-86sqkqoscuet1dcojlo2tr0hki0tsc6l.apps.googleusercontent.com");
	$gClient->setClientSecret("wGRVjwZtMvsyMWhG3stAFkCW");
	$gClient->setApplicationName("SS4U Login");
	$gClient->setRedirectUri("http://localhost:8888/SS4UREALSTATE/admin/modules/User/g-CallBack.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>