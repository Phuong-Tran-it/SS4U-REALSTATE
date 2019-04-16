 <?php  require_once __DIR__. "/../../../autoload/autoload.php";
   require_once __DIR__. "/../../../layout/header.php";
   ?>

<?php 
   if ($_POST)
   {
      $uemail = $_POST['email'];
/*
      $User= "SELECT * FROM users WHERE  email='$uemail'";
      $row = mysqli_fetch_row($User);*/
      $con = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($con, 'realestate');
    $query = "SELECT * FROM users WHERE  email='$uemail'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result);
    $fh = fopen('EmailTemplate.html', 'r');
    _debug($fh);die();
      if($row >0 )
      {
         
         require_once('class.phpmailer.php');
         require_once('class.smtp.php');
         
         $mail = new PHPMailer(true);
         $mail ->IsSMTP();
         $mail ->SMTPAuth     = true;
         $mail ->SMTPSecure   = "ssl";
         $mail ->Host         = "smtp.gmail.com";
         $mail ->Port         = 465;
         $mail ->Username     = "automailss4u@gmail.com";
         $mail ->Password     = "Ss4u2017";
         $mail->AddReplyTo("automailss4u@gmail.com","SS4U ") ;
         $mail->SetFrom('automailss4u@gmail.com','');
         $mail->AddReplyTo("automailss4u@gmail.com","SS4U");
         $address = $uemail;
         $mail->AddAddress($uemail,$uemail);
         $mail->IsHTML(true); 
         $mail->CharSet="utf-8";
         $mail->Subject = " Lấy Lại Mật Khẩu ";
         $mail ->Body = $fh;
         

         if($mail->Send())
         {
            $_SESSION['success'] = "Xác Nhận Thành Công, Vui Lòng Kiểm Tra Tin Nhắn";
         }
      }
      else
      {
         $_SESSION['error'] = " Email không tồn tại!";
      }
   }
   
   ?>
<br><br><br><br><br><br>
<div class="container">
<div class="text-head text-center">
   <h1>QUÊN THÔNG TIN TÀI KHOẢN</h1>
</div>
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   <div class="panel panel-info" >
      <div class="panel-heading">
         <!--Đăng Nhập Thất Bại-->
         <?php if (isset($_SESSION['error'])): ?>
         <div class="alert alert-danger" role="alert">
            <strong>Lỗi!</strong> <?php echo $_SESSION['error'] ;unset($_SESSION['error'])?>
         </div>

         <?php endif ?>
         <?php if (isset($_SESSION['success'])): ?>
         <div class="alert alert-success" role="alert">
            <strong>Thành Công!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success'])?>
         </div>
         
         <?php endif ?>
         <div class="panel-title"><strong>Tên Đăng Nhập</strong></div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
         <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
         <form id="loginform" class="form-horizontal" role="form" method="POST">
            <div style="margin-bottom: 25px" class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control" name="email" value="" placeholder="Email đăng ký">
               <?php if (isset($error['email'])):?>
               <p class="text-danger"> <?php echo $error['email'] ?></p>
               <?php endif?>                                       
            </div>
            <div style="margin-top:10px" class="form-group">
               <!-- Button -->
               <div class="col-sm-12 controls">
                  <button type="submit" class="btn btn-success" id="loginbox" name="submit">Xác Nhận</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<br><br><br><br><br><br><br><br><br><br>   <br><br><br><br><br><br><br><br><br><br>
<?php 
      require_once __DIR__. "/../../../layout/footer.php";?>
   ?>