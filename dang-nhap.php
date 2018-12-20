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
      	$is_check = $db->fetchOne("users"," email = '".$data['email']."' AND password = '".MD5($data['password'])."' ");
      	if($is_check != NULL)
      	{
      		$_SESSION['name_user'] = $is_check['name'];
      		$_SESSION['name_id'] = $is_check['id'];
      		echo "<script>alert('Đăng Nhập Thành Công !');location.href='home.php'</script>";
      	}
      	else
      	{
      		$_SESSION['error'] = " Đăng Nhập Thất Bại";
      	}
      }
      }
   ?>

 <?php    require_once __DIR__. "/admin/layout/header.php";?>
 <script src='https://www.google.com/recaptcha/api.js'></script>
<br><br><br>
<div class="container">
   <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
         <div class="panel-heading">
         	<!--Đăng Nhập Thành Công-->
         	<?php if (isset($_SESSION['success'])): ?>
         		<div class="alert alert-success">
         			<strong>Success!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success'])?>
         		</div>
         		<?php endif ?>
         		<!--Đăng Nhập Thất Bại-->
         	<?php if (isset($_SESSION['error'])): ?>
         		<div class="alert alert-error">
         			<strong>Error!</strong> <?php echo $_SESSION['error'] ;unset($_SESSION['error'])?>
         		</div>
         		<?php endif ?>

            <div class="panel-title"><strong>Đăng Nhập</strong></div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Quên mật khẩu?</a></div>
         </div>
         <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" class="form-horizontal" role="form" method="POST" action="check.php" >
               <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">
                  <?php if (isset($error['email'])):?>
                           <p class="text-danger"> <?php echo $error['email'] ?></p>
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
                  <div class="g-recaptcha" data-sitekey="6LfgmIMUAAAAAIRFgaU0huIh75-909XoTbS0hYtk"></div>
                  <div class="checkbox">
                     <label>
                     <input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ đăng nhập
                     </label>
                  </div>
               </div>
               <div style="margin-top:10px" class="form-group">
                  <!-- Button -->
                  <div class="col-sm-12 controls">
                     <button type="submit" class="btn btn-primary" id="loginbox">Đăng Nhập</button>
                     
                     
                  </div>
               </div>
               <div class="form-group">

                  <div class="col-md-12 control">
                     <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                        Bạn có tài khoản chưa ?
                        <a href="/SS4UREALSTATE/dang-ky.php">
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
   if(isset($_SESSION['name_id']))
   {
   echo "<script>alert('Bạn Đã Đăng Nhập, Vui lòng Đăng Xuất để tiếp tục thực hiện !');location.href='home.php'</script>";
      }
      ?>
   
</div>
<?php 
   require_once __DIR__. "/admin/layout/footer.php";
   ?>