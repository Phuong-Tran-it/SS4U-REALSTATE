<?php
	require_once __DIR__. "/../../autoload/autoload.php";
	if (!isset($_SESSION['access_token'])) {
		echo "<script>alert('Vui lòng trở lại màn hình đăng nhập!');location.href='/../../../SS4UREALSTATE/dang-nhap.php'</script>";
		exit();
		
	}
	$data=
      [		
  			"name" => $_SESSION['givenName'],
           "email" => $_SESSION['email']
      ];

      $is_check = $db->fetchOne("users"," email = '".$data['email']."' ");
         if($is_check == NULL)
         {
            $id_insert = $db->insert("users",$data);
         }
         $_SESSION['name_user'] = $is_check['name'];
        	$_SESSION['name_id'] = $is_check['id'];

	echo "<script>alert('Đăng Nhập Thành Công!');location.href='/../../../SS4UREALSTATE/home.php'</script>";
?>