<?php
	require_once "config.php";
	require_once __DIR__. "/../../../autoload/autoload.php";
	try {
		$accessToken = $helper->getAccessToken();
	} catch (\..\..\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Response Exception: " . $e->getMessage();
		exit();
	} catch (\..\..\Facebook\Exceptions\FacebookSDKException $e) {
		echo "SDK Exception: " . $e->getMessage();
		exit();
	}

	if (!$accessToken) {
		echo "<script>alert('Vui lòng trở lại màn hình đăng nhập!');location.href='/../../../../SS4UREALSTATE/dang-nhap.php'</script>";
		exit();
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (!$accessToken->isLongLived())
		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

	$response = $FB->get("/me?fields=id,name,email", $accessToken);
	$userData = $response->getGraphNode()->asArray();
	$_SESSION['userData'] = $userData;
	$_SESSION['access_token1'] = (string) $accessToken;
	header('Location: LoginFacebook.php');
	exit();
?>