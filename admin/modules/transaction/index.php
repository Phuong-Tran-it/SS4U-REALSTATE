<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/ADMINHEADER.php";
   
   if(isset($_GET['page']))
   {
      $p = $_GET['page'];
   }
   else
   {
      $p = 1;
   }
   $sql = "SELECT transaction.* , users.name as nameuser, users.phone as phoneuser FROM transaction LEFT JOIN users ON users.id = transaction.users_id ORDER BY ID DESC ";

   $transaction = $db->fetchsql($sql);

   if(isset($transaction['page']))
   {
      $sotrang = $transaction['page'];
      unset($transaction['page']);
   }
   
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
               <i class="fa fa-home"></i><a href="<?php echo base_url() ?>home.php">Trang Chủ</a>
            </li>
            <li class="active">
               <i class="fa fa-user"></i>Quản Lý 
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Danh Sách Đơn Hàng</h1>
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
                        <th>Họ Và Tên </th>
                        <th>Sồ Điện Thoại</th>
                        <th>Trạng Thái </th>
                        <th>Thao Tác</th>
                     </tr>
                  <tbody>
                     <?php $stt=1; foreach ($transaction as $item): ?>
                     <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['nameuser'] ?></td>
                        <td><?php echo $item['phoneuser'] ?></td>
                        <td>
                           <a href="status.php?id=<?php echo $item['id'] ?>" class="<?php echo $item['status']==0? 'btn btn-danger' : 'btn btn-info' ?>"><?php echo $item['status']==0?'Chưa Xử Lý':'Đã Xử Lý' ?></a>
                           
                        </td>
                        <td>
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
                        <li class="page-item disabled">
                           <span class="page-link">Trước</span>
                        </li>
                        <!--
                           <?php for( $i =1 ; $i <= $sotrang ; $i++): ?>
                           <?php
                              if(isset($_GET['page']))
                              {
                                 $p = $_GET['page'];
                              }
                              else
                              {
                                 $p = 1;
                              }
                              
                               ?>
                           <li class="<?php echo ($i==$p) ? 'active' : '' ?>">
                              <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                           </li>
                           <?php endfor; ?>
                           -->
                        <li class="page-item">
                           <a class="page-link" href="#">Sau</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>