<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   $id = intval(getInput('id'));
   
   $EditAdmin = $db->fetchID("admin",$id);
   if(empty($EditAdmin))
   {
      $_SESSION['error']= "Dữ Liệu Không Tồng Tại";
      redirectAdmin2("index.php");
   }
   
   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $data=
      [
           "phone" => postInput('phone'),
           "email" => postInput('email'),
           "level" => postInput('level'),
            "name" => postInput('name'),
              "address" => postInput('address')
      ];
      $error = [];
      //if
   
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
         if(postInput("email") != $EditAdmin['email'])
         {
            $is_check = $db->fetchOne("admin"," email = '".$data['email']."' ");
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
         if(postInput("phone") != $EditAdmin['phone'])
         {
            $is_check = $db->fetchOne("admin"," phone = '".$data['phone']."' ");
            if($is_check != NULL)
            {
               $error['phone']= "Số điện thoại đã tồn tại";
            }
         }
      }
      if(postInput('password') != NULL && postInput("re_password") != NULL)
      {
         if(postInput('password')  != postInput('re_password'))
         {
            $error['password'] = " Mật khẩu thay đổi không khớp";
         }
         else
         {
            $data['password'] = MD5(postInput("password"));
         }
      }
      //error trống là không phải lỗi
      if(empty($error))
      {
           $id_update = $db->update("admin",$data,array("id"=>$id));
           if($id_update > 0)
            {
               $_SESSION['success'] = "Cập Nhật thành công";
               redirectAdmin2("index.php");
            }
            else
            {
               $_SESSION['error'] = "Dữ liệu không thay đổi";
               redirectAdmin2("index.php");
            }
      }
   }
   ?>
<?php require_once __DIR__. "/../../layout/ADMINHEADER.php";?>
<title>Chỉnh Sửa QTV</title>
<section class="gallery-block">
   <div class="container">
   <div class="col-lg-12">
      <br><br>
      <div >
         <ol class="breadcrumb">
            <li>
               <i class="fa fa-home"></i><a href="<?php echo base_url() ?>home.php">Trang Chủ</a>
            </li>
            <li>
               <i class="fa fa-user"></i><a href="index.php">Quản Lý Admin</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Chỉnh Sửa Admin
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Chỉnh Sửa Thông Tin Admin</h1>
      </div>
      <div class="clearfit"></div>
      <?php if(isset($_SESSION['error'])):?>
      <div class="alert alert-danger">
         <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
      </div>
      <?php endif;?>
      <!--Đăng Tin-->
   </div>
</section>
<section>
   <div class="container">
      <form class="" action="" method="POST" enctype="multipart/form-data">
         <div class="form-row" >
            <div class="form-group">
               <div class="panel panel-primary">
                     <div class="panel-heading">Thông Tin Chi Tiết</div>
                     <div class="panel-body">
                        <div class="form-group">
                           <label for="inputAddress">Họ Và Tên</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="name" value="<?php echo $EditAdmin['name'] ?>">
                           <?php if (isset($error['name'])):?>
                           <p class="text-danger"> <?php echo $error['name'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Email</label>
                           <input type="email" class="form-control" id="inputAddress" placeholder="" name="email" value="<?php echo $EditAdmin['email'] ?>">
                           <?php if (isset($error['email'])):?>
                           <p class="text-danger"> <?php echo $error['email'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Số Điện Thoại</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="phone" value="<?php echo $EditAdmin['phone'] ?>">
                           <?php if (isset($error['phone'])):?>
                           <p class="text-danger"> <?php echo $error['phone'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Mật Khẩu</label>
                           <input type="password" class="form-control" id="inputAddress" placeholder="" name="password" >
                           <?php if (isset($error['password'])):?>
                           <p class="text-danger"> <?php echo $error['password'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Nhập Lại Mật Khẩu</label>
                           <input type="password" class="form-control" id="inputAddress" placeholder="" name="re_password">
                           <?php if (isset($error['re_password'])):?>
                           <p class="text-danger"> <?php echo $error['re_password'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Địa Chỉ</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="address" value="<?php echo $EditAdmin['address'] ?>">
                           <?php if (isset($error['address'])):?>
                           <p class="text-danger"> <?php echo $error['address'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Chức Vụ</label>
                           <select class="form-control" name="level">
                              <option value="1" <?php echo isset($EditAdmin['level']) && $EditAdmin['level'] == 1 ? "selected = 'selected'" 
                              : '' ?>> Cộng Tác Viên</option>
                              <option value="2" <?php echo isset($EditAdmin['level']) && $EditAdmin['level'] == 2 ? "selected = 'selected'" 
                              : '' ?>> Admin</option>
                           </select>
                           <?php if (isset($error['level'])): ?>
                              <p class="text-danger"> <?php echo $error['level'] ?></p>
                           <?php endif?>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="form-group">
            <div class="pull-right">
               <button type="submit" class="btn btn-primary">Đăng Tin</button>
            </div>
         </div>
      </form>
   </div>
</section>
<!--end-->