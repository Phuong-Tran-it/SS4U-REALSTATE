<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/header.php";
   $category =$db->fetchAll("category");
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
               <i class="fa fa-file"></i>Danh Mục Chủ Đầu Tư
            </li>
         </ol>
      </div>
      <div class="text-head text-center">
         <h1>Danh Sách Chủ Đầu Tư</h1>
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
                        <th>Tên Chi Tiết </th>
                        <th>slug</th>
                        <th>Hiển Thị</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Thao Tác</th>
                     </tr>
                     <tbody>
                     <?php $stt=1; foreach ($category as $item): ?>
                        <tr>
                           <td><?php echo $stt ?></td>
                           <td><?php echo $item['name'] ?></td>
                           <td><?php echo $item['slug'] ?></td>
                           <td>
                              <a href="home.php?id=<?php echo $item['id'] ?>" class="btn btn-xs <?php echo $item['home'] == 1 ? 'btn-info' : ' btn-default' ?>">
                                 <?php echo $item['home']== 1 ? ' Hiển thị ' : ' Không ' ?>
                              </a>
                           </td>
                           <td><?php echo $item['creat_at'] ?></td>
                           <td><?php echo $item['update_at'] ?></td>
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
                        <li class="page-item disabled">
                           <span class="page-link">Trước</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
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
   <?php require_once __DIR__. "/../../layout/footer.php";?>