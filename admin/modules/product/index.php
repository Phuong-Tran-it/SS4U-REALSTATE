<?php 
   $open = "product";
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/ADMINHEADER.php";
   $product =$db->fetchAll("product");
   
   $id = intval(getInput('id')) ;
   if(isset($_GET['p']))
   {
      $p = $_GET['p'];
   }
   else
   {
      $p = 1;
   }
   $sql = "SELECT product.*,category.name as namecate FROM product 
      LEFT JOIN category on category.id = product.category_id
      ";

   $total = count($db->fetchsql($sql));
   $product = $db->fetchJones("product",$sql,$total,$p,10,true);
   $sotrang = $product['page'];  
   unset($product['page']);
   $path = $_SERVER['SCRIPT_NAME'];
   
?>
<title>Danh Mục Sản Phẩm</title>
<!---end--->
<!--gallery block-->
<br>
<br>
<section class="category-block">
   <div class="container">
      <div >
         <ol class="breadcrumb">
            <li>
               <i class="fa fa-home"></i><a href="/SS4UREALSTATE/admin/modules/admin/Dashboard/Dashboard.php">Trang Chủ</a>
            </li>
            <li class="active">
               <i class="fa fa-file"></i>Danh Sách Bất Động Sản
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Danh Sách Bất Động Sản</h1>
      </div>
      <!--Them-->
      <div class="clearfix"></div>
      <!--thông báo-->
      <?php require_once __DIR__. "/../../../partials/notification.php";?>
      <!--end-->
      <div class="pull-right">
         <a href="add.php" class="btn btn-info">Thêm Mới</a>
      </div>
      <div class="col-md-12">
         <div class="row">
            <div class="table-responsive" >
               <table class ="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Thể Loại</th>
                        <th>Tên Chi Tiết </th>
                        <th>Dự Án</th>
                        <th>block</th>
                        <th>Hình Ảnh</th>
                        <th>Ngày Đăng</th>
                        <th>Thông Tin</th>
                        <th>Thao Tác</th>
                     </tr>
                  <tbody>
                     <?php $stt=1; foreach ($product as $item): ?>
                     <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['kind'] ?></td>
                        <td><?php echo $item['PORTION_ID'] ?></td>
                        <td><?php echo $item['BUILDING_ID'] ?></td>
                        <td><?php echo $item['category_id'] ?></td>
                        <td>
                           <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" 
                              width="80px" height="80px">
                        </td>
                        <td><?php echo $item['CREATION_DATE'] ?></td>
                        <td>
                           <ul>
                              <li>Hướng: <?php echo $item['HOUSE_VIEW'] ?></li>
                              <li>Tình Trạng: <?php echo $item['TTCANHO_NAME'] ?></li>
                              <li>Giá: <?php echo $item['price'] ?>₫</li>
                           </ul>
                        </td>
                        <td>
                           <a class="btn btn-xs btn-info"href="edit.php?id=<?php echo $item['id']?>"><i class="fa fa-edit">Sửa</i></a>
                           <a class="btn btn-xs btn-danger"href="delete.php?id=<?php echo $item['id']?>"><i class="fa fa-times">Xóa</i></a>
                        </td>
                     </tr>
                     <?php $stt++; endforeach ?>
                  </tbody>
                  </thead>
               </table>
               <nav aria-label="...">
                  <div class="pull-right">
                     <ul class="pagination">

                        <?php for ( $i=1; $i <= $sotrang; $i++): ?>
                        <li class="">
                           <a href="<?php echo $path ?>?id=<?php echo $id ?>&&p=<?php echo $i?>">
                              <?php echo $i; ?>
                              </a>
                        </li>
                        <?php endfor; ?>
                     
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      
   </div>
</section>