

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
      $category = $db->fetchAll("category");
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$data=
      [
         "category_id" => postInput("category_id")
      ];
		$error = [];
		if(postInput('category_id')=='')
		{
			$error['category_id']="Mời bạn nhập đầy đủ tên danh mục";
		}
		//error trống là không phải lỗi
		if(empty($error))
		{
         
		}
	}
?>
<?php require_once __DIR__. "/../../layout/header.php";?>
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
               <i></i><a href="index.php">Danh Sách Dự Án</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Thêm Mới
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Thêm Mới Dự Án</h1>
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
                     <select class="form-control form-control-lg" id="inputEmail3" name="category_id">
                        <option value="">Chung Cư Thuộc Dự án</option>
                        <?php foreach ($category as $item): ?>
                           <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?>
                           </option>
                        <?php endforeach?>
                     </select>
                        <?php if (isset($error['category_id'])):?>
                           <p class="text-danger"> <?php echo $error['category_id'] ?></p>
                        <?php endif?>
                     
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
<?php require_once __DIR__. "/../../layout/footer.php";?>