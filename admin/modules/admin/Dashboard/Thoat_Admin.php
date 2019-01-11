<?php
	session_start();
	unset($_SESSION['name_Admin']);
	unset($_SESSION['name_IDadmin']);
	header("location: /../../../SS4UREALSTATE/admin/modules/admin/login_Dashboard/login.php");
?>