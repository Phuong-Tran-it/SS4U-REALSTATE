<?php 
   require_once __DIR__. "/admin/autoload/autoload.php";
   $data =
   [
   		'email' => postInput("email"),
   		'password' => postInput("password")
   ];
   $error = [];
   if ($_SERVER["REQUEST_METHOD"]=="POST")
      {

      if($data('email')=='')
      {
         $error['email']="Email không được bỏ trống";
      }

      if($data('password')=='')
      {
         $error['password']="Mật Khẩu không được bỏ trống";
      }
      if (empty($error)) 
      {
      	$is_check = $db->fetchOne("users"," email = '".$data['email']."' AND password = '".MD5($data['password'])."' ");
      	_debug($is_check);
      	if($is_check != NULL)
      	{

      	}
      	else
      	{
      		$_SESSION['error'] = " Đăng Nhập Thất Bại";
      	}
      }
      }
   ?>

 <?php    require_once __DIR__. "/admin/layout/header.php";?>
<br><br><br>
<div class="container">
   <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
         <div class="panel-heading">
         	<?php if (isset($_SESSION['success'])): ?>
         		<div class="alert alert-success">
         			<strong>Success!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success'])?>
         		</div>
         		<?php endif ?>

         	<?php if (isset($_SESSION['error'])): ?>
         		<div class="alert alert-success">
         			<strong>Success!</strong> <?php echo $_SESSION['error'] ;unset($_SESSION['error'])?>
         		</div>
         		<?php endif ?>

            <div class="panel-title">Đăng Nhập</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Quên mật khẩu?</a></div>
         </div>
         <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" class="form-horizontal" role="form" method="POST">
               <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input id="login-username" type="text" class="form-control" name="name" value="" placeholder="username or email">
                  <?php if (isset($error['name'])):?>
                           <p class="text-danger"> <?php echo $error['name'] ?></p>
                           <?php endif?>                                       
               </div>
               <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                  <?php if (isset($error['password'])):?>
                           <p class="text-danger"> <?php echo $error['password'] ?></p>
                           <?php endif?>
               </div>
               <div class="input-group">
                  <div class="checkbox">
                     <label>
                     <input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ đăng nhập
                     </label>
                  </div>
               </div>
               <div style="margin-top:10px" class="form-group">
                  <!-- Button -->
                  <div class="col-sm-12 controls">
                     <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                     <a id="btn-fblogin" href="#" class="btn btn-primary">Đăng Nhập Bằng Facebook</a>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-12 control">
                     <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                        Bạn có tài khoản chưa ?
                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                        Đăng ký tài khoản
                        </a>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php 
      //xử lý
      $name = $email = $password = $address = $phone = '';
      $error = [];
      $conn = mysqli_connect("localhost","root","","realestate") or die();
      mysqli_set_charset($conn,"utf8");
      if ($_SERVER["REQUEST_METHOD"]=="POST")
      {
	      //tiến hành validate & đăng ký
	      if(isset($_POST['name'])&& $_POST['name'] != NULL)
	      {
	      	$name = $_POST['name'];
	      }
	      if($name == '')
	      {
	      	$error['name'] ="Tên không được để trống !";
	      }

	      if(isset($_POST['email'])&& $_POST['email'] != NULL)
	      {
	      $email = $_POST['email'];
	      }
	      if($email == '')
	      {
	      $error['email'] ="email được để trống !";
	      }

	      if(isset($_POST['password'])&& $_POST['password'] != NULL)
	      {
	      $password = $_POST['password'];
	      }
	      if($password == '')
	      {
	      $error['password'] ="Mật Khẩu không được để trống !";
	      }

	      if(isset($_POST['phone'])&& $_POST['phone'] != NULL)
	      {
	      $phone = $_POST['phone'];
	      }
	      if($phone == '')
	      {
	      $error['phone'] ="Số điện thoại không được để trống !";
	      }
	      if(isset($_POST['address'])&& $_POST['address'] != NULL)
	      {
	      $address = $_POST['address'];
	      }
	      if($address == '')
	      {
	      $error['address'] ="Địa chỉ không được để trống !";
	      }
	      if(empty($error))
	      {
	      	$sql = " INSERT INTO users(name,email,phone,address,password) VALUES ( '".$name."','".$email."','".$phone."','".$address."','".MD5($password)."')";
	      	$insert = mysqli_query($conn,$sql) or die ("Thêm mới thất bại");
	      	if ($insert > 0) 
	      	{
	      		$_SESSION['success']="Thêm Mới thành công";

	      	}
	      	else
	      	{
	      		$_SESSION['error']="Thêm Mới thất bại";
	      	}
	      }
      	}
      else
      {
      
      }
      ?>
   <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
         <div class="panel-heading">
            <div class="panel-title">Đăng ký</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng Nhập</a></div>
         </div>
         <div class="panel-body" >
            <form id="signupform" class="form-horizontal" role="form" action="" method="POST">
               <div id="signupalert" style="display:none" class="alert alert-danger">
                  <p>Error:</p>
                  <span></span>
               </div>
               <div class="form-group">
                  <label for="email" class="col-md-3 control-label">Email</label>
                  <div class="col-md-9">
                     <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $email ?>">
                     <?php if (isset($error['email'])): ?>
                     <p class="text-danger"> <?php echo $error['email'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="firstname" class="col-md-3 control-label">Họ Và Tên</label>
                  <div class="col-md-9">
                     <input type="text" class="form-control" name="name" placeholder="Trần Nhật Phương" value="<?php echo $name ?>">
                     <?php if (isset($error['name'])): ?>
                     	<p class="text-danger"> <?php echo $error['name'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="lastname" class="col-md-3 control-label">Số Điện Thoại</label>
                  <div class="col-md-9">
                     <input type="number" class="form-control" name="phone" placeholder="0346394242" value="<?php echo $phone ?>">
                     <?php if (isset($error['phone'])): ?>
                     <p class="text-danger"> <?php echo $error['phone'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="lastname" class="col-md-3 control-label">Địa chỉ</label>
                  <div class="col-md-9">
                     <input type="text" class="form-control" name="address" placeholder="Hồ Chí Minh" value="<?php echo $address ?>">
                     <?php if (isset($error['address'])): ?>
                     <p class="text-danger"> <?php echo $error['address'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class="col-md-3 control-label">Mật Khẩu</label>
                  <div class="col-md-9">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                     <?php if (isset($error['password'])): ?>
                     <p class="text-danger"> <?php echo $error['password'] ?></p>
                     <?php endif?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class="col-md-3 control-label">Nhập Lại Mật Khẩu</label>
                  <div class="col-md-9">
                     <input type="password" class="form-control" name="re_password" placeholder="Re Password">
                  </div>
               </div>
               <div class="form-group">
                  <!-- Button -->                                        
                  <div class="col-md-offset-3 col-md-9">
                     <button id="signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Đăng Ký</button>
                     <span style="margin-left:8px;">hoặc</span>  
                  </div>
               </div>
               <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                  <div class="col-md-offset-3 col-md-9">
                     <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Facebook</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php 
   require_once __DIR__. "/admin/layout/footer.php";
   ?>