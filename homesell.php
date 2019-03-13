<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="public/admin/images/favicon.ico"/>
      <title>Nhà Đất Bán</title>
      <!-- Bootstrap core CSS -->
      <link href="public/admin/css/scrolling-nav.css" rel="stylesheet" media="all">
      <link href="public/admin/css/bootstrap.min.css" rel="stylesheet">
      <link href="public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="public/admin/css/bxslider.css" rel="stylesheet" type="text/css" />
      <!-- Custom styles for this template -->
      <link href="public/admin/css/style.css" rel="stylesheet">
      <link href="public/admin/css/responsive.css" rel="stylesheet">
      <script src="public/admin/js/jquery.min.js" type="text/javascript"></script>
      <script src="public/admin/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="public/admin/js/scrolling-nav.js" type="text/javascript"></script>
      <script src="public/admin/js/scrollreveal.min.js" type="text/javascript"></script>
      <script src="public/admin/js/counterup.min.js" type="text/javascript"></script>
      <script src="public/admin/js/waypoints.min.js" type="text/javascript"></script>
      <script src="public/admin/js/bxslider.js" type="text/javascript"></script>
      <script type="text/javascript" src="public/admin/js/instafeed.min.js"></script>
      
   </head>
   <body>
      <!--header--->
      <header>
         <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-3">
                     <div class="navbar-header page-scroll">
                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                           <a href="home.php"><img src="public/admin/images/logo.png" alt="logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                           <li class="hidden active">
                              <a href="#page-top" class="page-scroll"></a>
                           </li>
                           <li><a href="home.php" class="page-scroll">Trang Chủ</a></li>
                           <li><a href="investor.php" class="page-scroll">Chủ Đầu Tư</a></li>
                           <li class="active"><a class="page-scroll">Nhà Đất Bán</a></li>
                           <?php require_once __DIR__. "/admin/autoload/autoload.php"; ?>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-1">
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                          <?php if(isset($_SESSION['name_user'])): ?> 
                           <li >
                              <a href="/SS4UREALSTATE/edit-profile.php?id=<?php echo $_SESSION['name_id']?>"><i class="fa fa-user"></i><?php echo $_SESSION['name_user'] ?></i></a>
                           </li>

                           <li><a href="/SS4UREALSTATE/admin/modules/User/Gio-Hang.php"><i class="fa fa-calendar"></i></a></li>
                           <li><a href="/SS4UREALSTATE/thoat.php"><i class="fa fa-share-square-o"></i></a></li>

                           <?php else :?>
                           <li>
                              <a href="/SS4UREALSTATE/dang-nhap.php"><i class="fa fa-unlock"></i>&nbsp; Đăng Nhập</a>
                           </li>
                           <?php endif;?>
                         </ul></div></div>
                  <!-- /navbar-collapse -->
               </div>
            </div>
            <!-- /.container -->
         </nav>
      </header>
      <br><br><br><br>
      <!--end-->
      <body>
         <div class="clearfix"></div>
         <div class="container">

            <h1></h1>
         </div>
         <div id="exTab1" class="container">
            <ul  class="nav nav-pills">
               <li class="active">
                  <a  href="#1a" data-toggle="tab">Nhà Riêng</a>
               </li>
               <li><a href="#2a" data-toggle="tab">Đất Nền Dự Án</a>
               </li>
               <li><a href="#3a" data-toggle="tab">Chung Cư</a>
               </li>
               <li><a href="#4a" data-toggle="tab">Biệt Thự</a>
               </li>
               <li><a href="#5a" data-toggle="tab">Nhà Phố</a>
               </li>
            </ul>
            <?php  $sqlHomenew= "SELECT * FROM product WHERE kind =1";
               $productnew= $db->fetchsql($sqlHomenew);
               ?>
            <div class="tab-content">
               <div class="tab-pane active" id="1a">
                  <div class="row">
                     <?php foreach ($productnew as $item): ?>
                     <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal ">
                        <div class="team_pos">
                           <img alt=" " src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">
                           <div class="team_info">
                              <div class="social-icons-effect">
                                 <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                                 <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                 <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                        <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>">
                           <p><?php echo $item['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ <br><i class="fa fa-eye"></i><?php echo $item['view'] ?> <i class="fa fa-heart"></i><?php echo $item['head'] ?></p>
                        </a>
                     </div>
                     <?php endforeach ?>
                  </div>
               </div>
               <div class="tab-pane" id="2a">
                  <div class="row">
                     <?php $sqlHomenew2= "SELECT * FROM product WHERE kind =2";
                        $productnew2= $db->fetchsql($sqlHomenew2);
                        ?>
                     <?php foreach ($productnew2 as $item2): ?>
                     <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal ">
                        <div class="team_pos">
                           <img alt=" " src="<?php echo uploads() ?>product/<?php echo $item2['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">
                           <div class="team_info">
                              <div class="social-icons-effect">
                                 <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item2['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                                 <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                 <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item2['id']?>"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                        <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item2['id']?>">
                           <p><?php echo $item2['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ <br><i class="fa fa-eye"></i><?php echo $item2['view'] ?> <i class="fa fa-heart"></i><?php echo $item2['head'] ?></p>
                        </a>
                     </div>
                     <?php endforeach ?>
                  </div>
               </div>
               <div class="tab-pane" id="3a">
                  <div class="row">
                     <?php $new3="SELECT * FROM product WHERE kind =3";
                        $productnew3= $db->fetchsql($new3);  ?>
                     <?php foreach ($productnew3 as $item): ?>
                     <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal ">
                        <div class="team_pos">
                           <img alt=" " src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">
                           <div class="team_info">
                              <div class="social-icons-effect">
                                 <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                                 <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                 <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                        <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>">
                           <p><?php echo $item['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ <br><i class="fa fa-eye"></i><?php echo $item['view'] ?> <i class="fa fa-heart"></i><?php echo $item['head'] ?></p>
                        </a>
                     </div>
                     <?php endforeach ?>
                  </div>
               </div>
            <div class="tab-pane" id="4a">
               <div class="row">
                     <?php $new4="SELECT * FROM product WHERE kind =4";
                        $productnew4= $db->fetchsql($new4);  ?>
                     <?php foreach ($productnew4 as $item): ?>
                     <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal ">
                        <div class="team_pos">
                           <img alt=" " src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">
                           <div class="team_info">
                              <div class="social-icons-effect">
                                 <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                                 <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                 <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                        <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>">
                           <p><?php echo $item['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ <br><i class="fa fa-eye"></i><?php echo $item['view'] ?> <i class="fa fa-heart"></i><?php echo $item['head'] ?></p>
                        </a>
                     </div>
                     <?php endforeach ?>
                  </div>
            </div>
            <div class="tab-pane" id="5a">
               <div class="row">
                     <?php $new5="SELECT * FROM product WHERE kind =5";
                        $productnew5= $db->fetchsql($new5);  ?>
                     <?php foreach ($productnew5 as $item): ?>
                     <div class=" col-sm-2 col-sm-2 team_gd1 scrollReveal ">
                        <div class="team_pos">
                           <img alt=" " src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive" style="width:300px; height: 200px">
                           <div class="team_info">
                              <div class="social-icons-effect">
                                 <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-info"></i></a>
                                 <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                 <a class="face_one" href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $item['id']?>"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                        <a class="face_one" href="/SS4UREALSTATE/chitiet-product.php?id=<?php echo $item['id']?>">
                           <p><?php echo $item['HOUSE_DETAIL_CODE'] ?><br><?php echo formatPrice(round($item['price'],-6)) ?>đ <br><i class="fa fa-eye"></i><?php echo $item['view'] ?> <i class="fa fa-heart"></i><?php echo $item['head'] ?></p>
                        </a>
                     </div>
                     <?php endforeach ?>
                  </div>
            </div>
         </div>
         </div>
   </body>
   <!--Đăng Tin-->
   <!--end-->
   <!--footer-->
   <footer>
      <div class="container">
      <div class="row footer-block-main">
         <div class="col-sm-3 col-xs-12">
            <div class="footer-block">
               <h4>Đường Dẫn</h4>
               <ul class="list-unstyled">
                  <li><a href="home.php">Trang Chủ</a></li>
                  <li><a href="investor.php">Chủ Đầu Tư</a></li>
                  <li class="active"><a>Nhà Đất Bán</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-3 col-xs-12">
            <div class="footer-block location-info">
               <h4>Thông Tin Liên Hệ</h4>
               <ul class="list-unstyled">
                  <li>
                     <p><a><span class="fa fa-location-arrow fa-lg"></span>  15A Hoang Hoa Tham Street, Binh Thanh district HCM City.</a></p>
                  </li>
                  <li>
                     <p><a href="XXXXXXXX"><span class="fa fa-phone fa-lg"></span> XXXXXXXX</a></p>
                  </li>
                  <li>
                     <p><a href="mailto:test@test.com"><span class="fa fa-envelope"></span> demo@info.com</a></p>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-sm-3 col-xs-12">
            <div class="footer-block">
               <h4>instagram post</h4>
               <div class="row gallery-footer">
                  <div class="col-md-12">
                     <div id="instafeed"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-3 col-xs-12">
            <div class="footer-block">
               <h4>social media</h4>
               <div class="footer-social">
                  <ul class="list-unstyled">
                     <li><a><i class="fa fa-search"></i></a></li>
                     <li><a><i class="fa fa-heart"></i></a></li>
                     <li><a><i class="fa fa-shopping-cart"></i></a></li>
                     <li><a><i class="fa fa-instagram"></i></a></li>
                     <li><a><i class="fa fa-google-plus"></i></a></li>
                     <li><a><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
         © 2018 All right reserved. Designed by <a href="http://www.ss4u.vn/" target="_blank">PhuongTran.</a>
      </div>
   </footer>
   <!--end-->
   <!--back to top--->
   <a id="back-to-top" class="scrollTop back-to-top" href="javascript:void(0);" style="display: none;">
   <img src="public/admin/images/top-arrow.png" alt="back-to-top"/>
   </a>
   </body>
</html>