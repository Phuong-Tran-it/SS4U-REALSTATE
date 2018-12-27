<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="public/admin/images/REALSTATE.png"/>
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
      <script src="public/admin/js/custom.js" type="text/javascript"></script>
   </head>
   <body>
      <!--header--->
      <header>

         <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-3">
                     <div class="navbar-header page-scroll">
                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                           <a href="home.php"><img src="public/admin/images/logoCTY.png" alt="logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-8 remove-left">
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                           <li class="hidden active">
                              <a href="#page-top" class="page-scroll"></a>
                           </li>
                           <li><a href="home.php" class="page-scroll">Trang Chủ</a></li>
                           <li><a href="investor.php" class="page-scroll">Chủ Đầu Tư</a></li>
                           <li class="active"><a class="page-scroll">Nhà Đất Bán</a></li>
                           <li> <a href="blog.php" class="page-scroll">        </a>        </li>
                           <li> <a href="contact.php" class="page-scroll">     </a>     </li>
                           <?php require_once __DIR__. "/admin/autoload/autoload.php"; ?>
                           <?php if(isset($_SESSION['name_user'])): ?>
                           <li >
                              <a href="/SS4UREALSTATE/edit-profile.php?id=<?php echo $_SESSION['name_id']?>"><i class="fa fa-user"></i><?php echo $_SESSION['name_user'] ?></i></a>
                           </li>
                           <li><a href="/SS4UREALSTATE/admin/modules/User/Gio-Hang.php"><i class="fa fa-shopping-cart"></i></a></li>
                           <li><a href="/SS4UREALSTATE/thoat.php"><i class="fa fa-share-square-o"></i></a></li>
                           <?php else :?>
                            <li>
                              <a href="/SS4UREALSTATE/dang-nhap.php"><i class="fa fa-unlock"></i>&nbsp; Đăng Nhập</a>
                           </li>

                           <?php endif;?>
                        </ul>
                     </div>
                  </div>
                  <!-- /navbar-collapse -->
               </div>
            </div>
            <!-- /.container -->
         </nav>
      </header>
      <!--end-->
      <body>
        
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