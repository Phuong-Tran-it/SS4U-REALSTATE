<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Nhập Quản Trị</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php 
   require_once __DIR__. "/../../../autoload/autoload.php";
   $data =
   [
         'email' => postInput("email"),
         'password' => postInput("password")
   ];
   if ($_SERVER["REQUEST_METHOD"]=="POST")
      {
      	if(postInput('email')=='')
      {
         $error['email']="Nhập email";
      }
      if(postInput('password')=='')
      {
         $error['password']="Nhập password";
      }
       if (empty($error)) 
      {
         
         $is_check = $db->fetchOne("admin","  email = '".$data['email']."' AND password = '".MD5($data['password'])."' ");
               
         if($is_check != NULL )
         {
            $_SESSION['name_Admin'] = $is_check['name'];
            $_SESSION['level'] = $is_check['level'];
            $_SESSION['avatar'] = $is_check['avatar'];
            $_SESSION['name_IDadmin'] = $is_check['id'];
            echo "<script>location.href='/../../../SS4UREALSTATE/admin/modules/admin/Dashboard/Dashboard.php'</script>";
         }
         else
         {
            $_SESSION['error'] = " Sai Tên Tài Khoản Hoặc Mật Khẩu";
         }
   
      }
      }

?>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Đăng Nhập Quản Trị Viên
				</span>
				<?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
               <strong>Error!</strong> <?php echo $_SESSION['error'] ;unset($_SESSION['error'])?>
            </div>
            <?php endif ?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Email">
						<?php if (isset($error['email'])):?>
                  <p class="text-danger"> <?php echo $error['email'] ?></p>
                  <?php endif?> 
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<?php if (isset($error['password'])):?>
                  <p class="text-danger"> <?php echo $error['password'] ?></p>
                  <?php endif?>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>