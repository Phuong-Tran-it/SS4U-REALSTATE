<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/header.php";
   $sum = 0;
   if (!isset($_SESSION['cart'])|| count($_SESSION['cart'])==0) {
   		echo "<script>alert('Không có lựa chọn nào !');location.href='/../../../SS4UREALSTATE/home.php'</script>";
   }
   ?>
<br><br><br><br><br><br>
<div class="container">
   <h1></h1>
</div>
<div id="exTab1" class="container">
<ul  class="nav nav-pills">
   <li class="active">
      <a  href="#1a" data-toggle="tab">Lựa Chọn Của Bạn</a>
   </li>
   <li><a href="#2a" data-toggle="tab">Lịch Sử Giao Dịch</a>
   </li>
</ul>
<div class="tab-content">
   <div class="tab-pane active" id="1a">
      <div class="col-md-12">
         <br>
         <div class="row">
            <div>
               <table>
                  <thead>
                     <tr>
                        <th>stt</th>
                        <th>Tên</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                     </tr>
                  <tbody>
                     <?php $stt=1; foreach ($_SESSION['cart'] as $key =>$val): ?>
                     <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $val['HOUSE_DETAIL_CODE'] ?></td>
                        <td><img src="<?php echo uploads() ?>product/<?php echo $val['thunbar'] ?>" 
                           width="80px" height="80px">
                        </td>
                        <td><?php echo formatPrice($val['price']) ?></td>
                        <td>
                           <input type="number" name="qty" value="<?php echo $val['qty'] ?>" class="form-control">
                        </td>
                        <td>
                           <?php 
                              echo  
                              formatPrice($val['qty'] * $val['price'])
                              ?>
                        </td>
                        <td>
                           <a class="btn btn-xs btn-danger"href=""><i class="fa fa-times">Xóa</i></a>
                           <a class="btn btn-xs btn-info"href=""><i class="fa fa-refresh">Cập Nhật</i></a>
                        </td>
                     </tr>
                     <?php $sum += $val['price'] * $val['qty']; $_SESSION['tongtien']= $sum; 
                        ?>
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
         <div class="clearfix"></div>
         <div class="col-md-5 pull-right">
            <div class="list-group">
               <button type="button" class="list-group-item list-group-item-action active">
               Thông Tin Thanh Toán
               </button>
               <li class="list-group-item">
                  <span class="badge pull"><?php echo $_SESSION['tongtien'] ?>đ</span>Giá Tiền
               </li>
               <li class="list-group-item">
                  <span class="badge pull">10%</span>VAT 
               </li>
               <li class="list-group-item">
                  <span class="badge pull"><?php echo sale($_SESSION['tongtien']) ?> %</span>Giảm Giá
               </li>
               <li class="list-group-item">
                  <span class="badge pull"><?php $_SESSION['total']= $_SESSION['tongtien']*110/100;echo $_SESSION['total'] ?></span>Thanh Toán
               </li>
               <li class="list-group-item">
               		<a href="/../../../SS4UREALSTATE/home.php" class="btn btn-success">Tiếp Tục Tham Khảo</a>
               		<a href="Thanh-Toan.php" class="btn btn-success">Thanh Toán</a>
               </li>
            </div>
         </div>
      </div>
   </div>
   <div class="tab-pane" id="2a">
   </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once __DIR__. "/../../layout/footer.php";?>