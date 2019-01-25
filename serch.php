<?php require_once __DIR__. "/admin/autoload/autoload.php";?>
<?php require_once __DIR__. "/admin/layout/header.php";
?>
<title>Tìm Kiếm</title>
   <body>
      <br><br><br>
      <!--cây tìm kiếm-->
<section class="finder-block">
            <div class="container">
      <?php require_once __DIR__. "/admin/function/SearchTree.php";?>
      <!--end-->
      <!--Hiển Thị Tìm Kiếm-->
      <?php if($ProductVIP != NULL) {?>
             <section class="staff-block">
         <div class="container">
            <div class="text-head text-center">
               <h1>Có <?php echo count($ProductVIP) ?> Kết Quả Tìm Kiếm</h1>
            </div>
            <div class="staff-team">
               <div class="row">
                <?php foreach ($ProductVIP as $item): ?>  
                  <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal sr-delay-1">
                     <div class="team_pos">
                        <img alt=" " src="public/uploads/product/dep.png" class="img-responsive" style="width:300px; height: 200px">
                        <!--<img alt=" " src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">-->
                        <div class="team_info">
                           <div class="social-icons-effect">

                              <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                              <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                              <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-bookmark"></i></a>
                           </div>
                        </div>
                     </div>
                     <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>">
                     <p><?php echo $item['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ</p>
                   </a>
                  </div>
                <?php endforeach ?>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </section>
        <br><br>
      <?php } ?>
      <?php if($ProductVIP == NULL) {?>
        <section class="staff-block">
         <div class="container">
            <div class="text-head text-center">
               <h1>Không Có Kết Quả</h1>
            </div></div></section>
<?php }?>

   </body>