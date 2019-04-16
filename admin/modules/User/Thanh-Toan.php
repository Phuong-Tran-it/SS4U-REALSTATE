<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   $user = $db->fetchID("users",intval($_SESSION['name_id']));
   if($_SERVER["REQUEST_METHOD"] = "POST")
   {     if(isset($_SESSION['total'])){
   		$data=
   		[
   			'amount' => $_SESSION['total'],
   			'users_id' => $_SESSION['name_id'],
   		];

   		$idtran = $db->insert("transaction",$data);
         $data3=
         [

            "name" => $_SESSION['name_user'],
            "messege" => 'Bạn Có Một Lịch Hẹn',
            "status" => 'unread'
         ];
         $insertnote = $db->insert("notifications",$data3);
   		if($idtran >0)
   		{
   			foreach ($_SESSION['cart'] as $key => $value) 
   			{
   				$data2 =
   				[
   					'transaction_id' 	=> $idtran,
   					'product_id' 		=> $key,
   					'qty' 				=> $value['qty'],
   					'price' 			=> $value['price']
   				];
   				$id_insert = $db->insert("orders",$data2);
   			}
   			unset($_SESSION['cart']);
   			unset($_SESSION['total']);
   			$_SESSION['success'] = " Lưu Thành Công, Chúng Tôi Sẽ Liên Hệ Cho Bạn Sớm Nhất !";
   		}
         }
         else
         {
            echo "<script>location.href='/../../../SS4UREALSTATE/home.php'</script>";
         }
   }
   ?>
   <?php    require_once __DIR__. "/../../layout/header.php"; ?>
<div class="container">
   <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
      </div>
      
      <div class="panel-body" >
         <form id="signupform" class="form-horizontal" role="form" action="" method="POST">
               <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-error">
               <strong>sucess!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success']);unset($_SESSION['cart']);
   unset($_SESSION['total'])	?>
            </div>
            <?php endif ?>
            
            <div class="form-group">
               <label for="email" class="col-md-3 control-label">Email</label>
               <div class="col-md-9">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo  $user['email'] ?>">
               </div>
            </div>
            <div class="form-group">
               <label for="firstname" class="col-md-3 control-label">Họ Và Tên</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="name" placeholder="Trần Nhật Phương" value="<?php echo  $user['name'] ?>">
               </div>
            </div>
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Số Điện Thoại</label>
               <div class="col-md-9">
                  <input type="phone" class="form-control" name="phone" placeholder="0346394242" value="<?php echo  $user['phone'] ?>">
                  <?php if (isset($error['phone'])): ?>
                  <p class="text-danger"> <?php echo $error['phone'] ?></p>
                  <?php endif?>
               </div>
            </div>
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Số Tiền</label>
               <div class="col-md-9">
                  <input type="phone" class="form-control" name="amount"  value="<?php echo  $data['amount'] ?> đ">
               </div>
            </div>
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Địa chỉ</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="address" placeholder="Hồ Chí Minh" value="<?php echo  $user['address'] ?>">
               </div>
            </div><!--
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Địa chỉ</label>
               <div class="col-md-9">
                  <select class="form-control">
                     <option value="-1">Loại Ngân Hàng</option>
                     <option value="43">Ngân hàng TMCP Ngoại Thương Việt Nam (Vietcombank)</option>
                     <option value="44">Ngân hàng TMCP Kỹ Thương Việt Nam (Techcombank)</option>
                     <option value="31">Ngân hàng TMCP Quốc Tế (VIB)</option>
                     <option value="37">Ngân hàng TMCP Xuất Nhập Khẩu Việt Nam (EIB)</option>
                     <option value="33">Ngân hàng TMCP Quân Đội (MBank)</option>
                     <option value="35">Ngân hàng TMCP Á Châu (ACB)</option>
                     <option value="28">Ngân hàng TMCP Sài Gòn Thương Tín (Sacombank)</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Tên Chủ Thẻ</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="" placeholder="TRAN NHAT PHUONG" value="">
               </div>
            </div>
            <div class="form-group">
               <label for="lastname" class="col-md-3 control-label">Ngày Hết Hạn</label>
               <div class="col-md-3">
                  <input type="text" class="form-control" name="" placeholder="Hồ Chí Minh" value="MM/YY">
               </div>
               <label for="lastname" class="col-md-2 control-label">Mã Thẻ</label>
               <div class="col-md-4">
                  <input type="text" class="form-control" name="" placeholder="Hồ Chí Minh" value="VD: 1234">
               </div>
            </div>
            <div class="form-group">
               <!-- Button -->                                        
               <div class="col-md-offset-3 col-md-9">
                  <button  type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Xác Nhận</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once __DIR__. "/../../layout/footer.php" ?>