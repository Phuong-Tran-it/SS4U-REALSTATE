<?php require_once __DIR__. "/admin/autoload/autoload.php";?>
<?php require_once __DIR__. "/admin/layout/header.php";?>
<?php 
   $id = intval(getInput('id'));
   $product = $db->fetchID("product",$id);
   $cateid= intval($product['category_id']);
   $HOUSE = intval($product['HOUSE_DETAIL_NAME']);
   //$ID = $product['category_id'];
   //$category = $db->fetchID("category",$ID);
   $sql=" SELECT * FROM product WHERE HOUSE_DETAIL_NAME = $HOUSE ORDER BY ID DESC LIMIT 6";
   $Fall = $db->fetchsql($sql);
   ?>
<title>Chi Tiết Sản Phẩm</title>
<body>
   <div id="wrapper">
      <!---->
      <!--HEADER-->
      <!--END HEADER-->
      <!--MENUNAV-->
      <br><br><br><br>
      <!--ENDMENUNAV-->
      <center>
         <h1 style="color: #055699"><?php echo $product['HOUSE_DETAIL_NAME']?> - <?php echo $product['HOUSE_DETAIL_CODE']?> tuyệt đẹp</h1>
      </center>
      <div id="maincontent">
         <div class="container">
            <div class="col-md-12 bor">
               <section >
                  <div class="col-md-8 text-center">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators 
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol>-->
                        <div class="carousel-inner">
                           <div class="item active">
                              <img src="public/admin/images/Home/1.png" style="width:100%; height: 500px" alt="First slide">
                           </div>
                           <div class="item">
                              <img src="public/admin/images/Home/2.png" style="width:100%; height: 500px" alt="First slide">
                              
                           </div>
                           <div class="item">
                              <img src="public/admin/images/Home/3.png" style="width:100%; height: 500px" alt="First slide">
                           </div>
                           <div class="item">
                              <img src="public/admin/images/Home/4.png" style="width:100%; height: 500px" alt="First slide">
                           </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="fa fa-angle-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-angle-right"></span></a>
                     </div>
                     <div>
                     <ol class="carousel-indicators">
                        <ul >
                           <a data-target="#myCarousel" data-slide-to="0" class="active">
                           <img src="public/admin/images/Home/1.png"  width="90" height="90"></a>
                           <a data-target="#myCarousel" data-slide-to="1">
                           <img src="public/admin/images/Home/2.png"  width="90" height="90"></a>
                           <a data-target="#myCarousel" data-slide-to="2">
                           <img src="public/admin/images/Home/3.png"  width="90" height="90">
                           </a>
                           <a data-target="#myCarousel" data-slide-to="3">
                           <img src="public/admin/images/Home/4.png"  width="90" height="90">
                           </a>
                        </ul>
                     </ol>
                     </div>
                     
                  </div>

                  <div class="col-md-4 bor" style="margin-top: 10px;padding: 10px;background: #cd8225 ">
                     <ul id="right" style="">
                        <!--<h3 style="color: white"> <?php echo $product['HOUSE_DETAIL_CODE'] ?> </h3>
                           <li><h4>Thuộc Dự Án: <?php echo $category['name'] ?></h4></li>-->
                        <?php $Dollar =  $product['price']/23000 ?>
                        <p ><strong style="color: white"><b class="price"><?php echo formatPrice(round($product['price'],-6)) ?> VNĐ</b></strong>
                        <hr>
                        <p ><strong style="color: white"><b class="price"><?php echo formatPrice(round($Dollar,-3)) ?> USD</b></strong>
                           <br>
                     </ul>
                  </div>
                  <form method="POST">
                     <div class="col-md-4 bor" style="margin-top: 20px;padding: 30px;">
                        <h2>Liên Hệ Xem Nhà</h2>
                        <input type="datetime-local" class="form-control" id="inputAddress" placeholder="" name="Booking" value="">
                        <br>
                        <center><a href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $product['id']?>" class="btn btn-primary" type="submit" name="book"> <i class="fa fa-calendar"></i>Đặt Lịch</a></center>
                     </div>
                  </form>
                  <?php   
                  if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
            
}
                     
                     ?>
               </section>
               <div class="col-md-12" id="tabdetail">
                  <div class="row">
                     <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                        <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
                        <li><a data-toggle="tab" href="#menu2"></a></li>
                        <li><a data-toggle="tab" href="#menu3"></a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                           <h2>Địa Chỉ: <?php echo $product['DIA_CHI'] ?></h2>
                           <div class="col-wrap">
                              <div class="col">
                                 <p><b>Mã Block:</b> <?php echo $product['HOUSE_DETAIL_CODE'] ?></p>
                                 <p><b>Mã Tòa Nhà:</b> <?php echo $product['BUILDING_ID'] ?></p>
                                 <p><b>Tầng Số:</b> <?php echo $product['FLOOR_ID'] ?></p>
                              </div>
                              <div class="col">
                                 <p><b>Hướng Nhà:</b> <?php echo $product['HOUSE_VIEW'];echo $product['HOUSE_DIRECTION'] ?></p>
                                 <p><b>Diện Tích Sàn:</b> <?php echo $product['DT_LUNG'] ?>m2</p>
                              </div>
                              <div class="col">
                                 <p><b>Số Phòng:</b> <?php echo $product['SL_PHONG'] ?></p>
                                 <p><b>Số WC:</b> <?php echo $product['SL_WC'] ?></p>
                              </div>
                           </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                           <h3> Mô Tả </h3>
                           <p><?php echo $product['content'] ?></p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                           <h3>Menu 2</h3>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                           <h3>Menu 3</h3>
                           <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="staff-team">
               <div class="row">
<h1>CÓ THỂ BẠN MUỐN XEM</h1>
                <?php foreach ($Fall as $item): ?>
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
            </div>
         </div>
      </div>
   </div>
   <script  src="js/slick.min.js"></script>
</body>
<?php require_once __DIR__. "/admin/layout/footer.php";?>