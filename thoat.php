<?php
	session_start();
	unset($_SESSION['name_user']);
	unset($_SESSION['name_id']);
	require_once __DIR__."/admin/modules/User/loginGoogle/config.php";
	unset($_SESSION['access_token']);
	unset($_SESSION['access_token1']);
	$gClient->revokeToken();
	session_destroy();
	header("location: home.php");
		exit();
?>