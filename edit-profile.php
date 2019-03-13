<?php    require_once __DIR__. "/admin/layout/header.php";?>
<title>Chỉnh Sửa Thông Tin</title>
<br><br><br>
<div class="container">
   <?php       //xử lý
      require_once __DIR__. "/admin/autoload/autoload.php";
      $id = intval(getInput('id'));
      $EditUser = $db->fetchID("users",$id);
      $data=
         [
              "name" => postInput('name'),
              "email" => postInput('email'),
              "phone" => postInput('phone'),
              "password" => md5(postInput('password')),
                 "address" => postInput('address')
         ];
      
         if ($_SERVER["REQUEST_METHOD"]=="POST")
         {
            
            //tiến hành validate & đăng ký
            if(postInput('name')=='')
         {
            $error['name']="Mời bạn nhập họ và tên";
         }
         
         if(postInput('address')=='')
         {
            $error['address']="Mời bạn nhập địa chỉ";
         }
         if(postInput('email')=='')
         {
            $error['email']="Mời bạn nhập địa chỉ email";
         }
         else
         {
            if(postInput("email") != $EditUser['email'])
            {
               $is_check = $db->fetchOne("users"," email = '".$data['email']."' ");
               if($is_check != NULL)
               {
                  $error['email']= "Email đã tồn tại";
               }
            }
         }
         if(postInput('phone')=='')
         {
            $error['phone']="Mời bạn nhập số điện thoại";
         }
         else
         {
            if(postInput("email") != $EditUser['email'])
            {
            $is_check = $db->fetchOne("users"," phone = '".$EditUser['phone']."' ");
            if($is_check != NULL)
            {
               $error['phone']= "Số điện thoại đã tồn tại";
            }
         }
         }
         if(postInput('password')=='')
         {
            $error['password']="Mời bạn nhập mật khẩu";
         }
         if($data['password']!= MD5(postInput("re_password")))
         {
            $error['password'] = "Mật khẫu không khớp";
         }
            if(empty($error))
            {
               $id_update = $db->update("users",$data,array("id"=>$id));
              if($id_update > 0)
               {
                  echo "<script>alert('Bạn chỉnh sửa thành công! Đăng nhập để tiếp tục thực hiện !');location.href='dang-nhap.php'</script>";
               }
               else
               {
                  echo "<script>alert('Dữ liệu không thay đổi! Đăng nhập để tiếp tục thực hiện !');location.href='dang-nhap.php'</script>";
               }
            }
            }
         ?>
   <div style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
         <div class="panel-heading">
            <div class="panel-title"><strong>Chỉnh Sửa Thông Tin Cá Nhân</strong></div>
            <div style="float:right; font-size: 85%;position: relative; top:-10px"></div>
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
                     <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo  $EditUser['email'] ?>">
                     <?php if (isset($error['email'])): ?>
                     <p class="text-danger"> <?php echo $error['email'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="firstname" class="col-md-3 control-label">Họ Và Tên</label>
                  <div class="col-md-9">
                     <input type="text" class="form-control" name="name" placeholder="Trần Nhật Phương" value="<?php echo  $EditUser['name'] ?>">
                     <?php if (isset($error['name'])): ?>
                     <p class="text-danger"> <?php echo $error['name'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="lastname" class="col-md-3 control-label">Số Điện Thoại</label>
                  <div class="col-md-9">
                     <input type="number" class="form-control" name="phone" placeholder="0346394242" value="<?php echo  $EditUser['phone'] ?>">
                     <?php if (isset($error['phone'])): ?>
                     <p class="text-danger"> <?php echo $error['phone'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="lastname" class="col-md-3 control-label">Địa chỉ</label>
                  <div class="col-md-9">
                     <input type="text" class="form-control" name="address" placeholder="Hồ Chí Minh" value="<?php echo  $EditUser['address'] ?>">
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
                     <input type="password" class="form-control" id="inputAddress" placeholder="re password" name="re_password" required="" >
                     <?php if (isset($error['re_password'])):?>
                     <p class="text-danger"> <?php echo $error['re_password'] ?></p>
                     <?php endif?>
                  </div>
               </div>
               <div class="form-group">
                  <!-- Button -->                                        
                  <div class="col-md-offset-3 col-md-9">
                     <button id="signupbox" type="submit" class="btn btn-primary"><i class="icon-hand-right"></i> Chỉnh Sửa</button>
                  </div>
               </div>
               <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php 
   require_once __DIR__. "/admin/layout/footer.php";
   ?>