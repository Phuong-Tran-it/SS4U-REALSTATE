<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   // gán dữ liệu nhập vào và dữ liệu database(thường thì tên biến sẽ đặt giống tên trường trong databasse)
   $data=
      [
           "phone" => postInput('phone'),
           "email" => postInput('email'),
           "level" => postInput('level'),
           "password" => md5(postInput('password')),
            "name" => postInput('name'),
              "address" => postInput('address')
      ];
   if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $error = [];
      //kiểm tra dữ liệu nhập vào có trống hay không
   
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
         $is_check = $db->fetchOne("admin"," email = '".$data['email']."' ");
         if($is_check != NULL)
         {
            $error['email']= "Email đã tồn tại";
         }
      }
      if(postInput('phone')=='')
      {
         $error['phone']="Mời bạn nhập số điện thoại";
      }
      else
      {
         $is_check = $db->fetchOne("admin"," phone = '".$data['phone']."' ");
         if($is_check != NULL)
         {
            $error['phone']= "Số điện thoại đã tồn tại";
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
      //error trống là không phải lỗi
      if(empty($error))
      {
           
           $id_insert = $db->insert("admin",$data);
           if($id_insert)
            {
               move_uploaded_file($file_tmp,$part.$file_name);
               $_SESSION['success']="Thêm Mới thành công";
               redirectAdmin2("index.php");
            }
            else
            {
               $_SESSION['error']="Thêm Mới thất bại";
            }
      }
   }
   ?>
<?php require_once __DIR__. "/../../layout/ADMINHEADER.php";?>
<title>Thêm QTV</title>
<section class="gallery-block">
   <div class="container">
   <div class="col-lg-12">
      <br><br>
      <div >
         <ol class="breadcrumb">
            <li>
               <i class="fa fa-home"></i><a href="/SS4UREALSTATE/admin/modules/admin/Dashboard/Dashboard.php">Trang Chủ</a>
            </li>
            <li>
               <i class="fa fa-user"></i><a href="index.php">Quản Lý Admin</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Thêm Mới Admin
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Thêm Mới Admin</h1>
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
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="name" value="<?php echo $data['name'] ?>">
                           <?php if (isset($error['name'])):?>
                           <p class="text-danger"> <?php echo $error['name'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Email</label>
                           <input type="email" class="form-control" id="inputAddress" placeholder="" name="email" value="<?php echo $data['email'] ?>">
                           <?php if (isset($error['email'])):?>
                           <p class="text-danger"> <?php echo $error['email'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Số Điện Thoại</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="phone" value="<?php echo $data['phone'] ?>">
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
                           <input type="password" class="form-control" id="inputAddress" placeholder="" name="re_password" required="" >
                           <?php if (isset($error['re_password'])):?>
                           <p class="text-danger"> <?php echo $error['re_password'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Địa Chỉ</label>
                           <input type="text" class="form-control" id="inputAddress" placeholder="" name="address" value="<?php echo $data['address'] ?>">
                           <?php if (isset($error['address'])):?>
                           <p class="text-danger"> <?php echo $error['address'] ?></p>
                           <?php endif?>
                        </div>
                        <div class="form-group">
                           <label for="inputAddress">Chức Vụ</label>
                           <select class="form-control" name="level">
                              <option value="1" <?php echo isset($data['level']) && $data['level'] == 1 ? "selected = 'selected'" 
                              : '' ?>> Cộng Tác Viên</option>
                              <option value="2" <?php echo isset($data['level']) && $data['level'] == 2 ? "selected = 'selected'" 
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