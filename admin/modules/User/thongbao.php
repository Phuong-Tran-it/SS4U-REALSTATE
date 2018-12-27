<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/header.php";
   unset($_SESSION['cart']);
   unset($_SESSION['total']);
   ?>





<section  class="counter-block">
   <div style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
         <div class="panel-heading">
            <div class="panel-title"><strong>Thông Báo Thanh Toán</strong></div>
            
         </div>
         <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
               <strong>success!</strong> 
               <?php 
               echo $_SESSION['success'] ;

               unset($_SESSION['success'])
               
           ?>
           <?php endif ?>
            </div>
            <div class="form-group">
                  <div class="col-md-9">
                     <a href="/../../../SS4UREALSTATE/home.php" class="btn btn-success">Trở về trang chủ</a>
                  </div>
               </div>
            
            </div></div></section>
<?php 
   require_once __DIR__. "/../../layout/footer.php";
   ?>