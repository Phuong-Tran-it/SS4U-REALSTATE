
<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$EditCategory = $db->fetchID("category",$id);
	if(empty($EditCategory))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("category");
	}
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$data=
      [
         "name" => postInput('name'),
         "slug" => to_slug(postInput("name"))
      ];
		$error = [];
		if(postInput('name')=='')
		{
			$error['name']="Mời bạn nhập đầy đủ tên danh mục";
		}
		//error trống là không phải lỗi
		if(empty($error))
		{
         $isset = $db ->fetchOne("category","name = '".$data['name']."'");
			$id_update = $db->update("category",$data,array("id"=>$id));
         if(count($isset)>0)
         {
            $_SESSION['error']="Tên danh mục đã tồn tại";
         }
         else{


			if($id_update>0)
		     {
		        $_SESSION['success']="Cập nhật thành công";
		        redirectAdmin("index.php");
		     }
         else
	         {
	            $_SESSION['error']="Dữ liệu không thay đổi";
	            redirectAdmin("index.php"); 
	         }
            }
		}
	}
?>
<?php require_once __DIR__. "/../../layout/ADMINHEADER.php";?>
<title>Chỉnh Sửa Chủ Dự Án</title>
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
               <i></i><a href="index.php">Danh Sách Chủ Đầu Tư</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Chỉnh Sửa
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Chỉnh Sửa Chủ Đầu Tư</h1>
      </div>
      <div class="clearfit"></div>
      <?php if(isset($_SESSION['error'])):?>
      <div class="alert alert-danger">
         <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
      </div>
      <?php endif;?>
      <div class="row">
         <div class="col-lg-12">
            <form class="form-horizontal" action="" method="POST">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm2 control-label">Tên Danh Mục</label>
                  <div class="[pull-right]">
                     <input type="text" class="form-control" id="inputEmail3" placeholder="Tên Danh Mục" name="name"value="<?php echo $EditCategory['name']  ?>">
                     <?php if(isset($error['name'])):?>
                        <p class="text-danger"><?php echo $error['name']; ?></p>
                     <?php endif ?>
                  </div>
               </div>
               <div class="form-group">
                  <div class="pull-left">
                     <button type="submit" class="btn btn-primary">Lưu</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>