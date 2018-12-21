<?php
	session_start();
	try{
		$ip=$_SERVER['REMOTE_ADDR'];
		$Response=$_POST['g-recaptcha-response'];
		$list=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfgmIMUAAAAAF7NNAb7bRHYgUZUxl-7ExwTSTbP&response=$Response&remoteip=$ip");
		$json=json_decode($list,true);
		if($json['success'] !=1){
			throw new Exception('Vui lòng kích hoạt lại Capcha');
		}
		header('location: home.php');
	}catch(Exception $e)
	{
		$_SESSION['msg']=$e->getMessage();
		header('location: home.php');	
	}
?>