<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="public/admin/images/REALSTATE.png"/>
        <title>Chủ Đầu Tư</title>
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
        <scr
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
                           <a href="index.html"><img src="public/admin/images/logoCTY.png" alt="logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8 remove-left">
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                           <li class="hidden active">
                              <a href="#page-top" class="page-scroll"></a>
                           </li>
                           <li><a href="home.php" class="page-scroll">Trang Chủ</a></li>
                           <li class="active"><a class="page-scroll">Chủ Đầu Tư</a></li>
                           <li><a href="homesell.php" class="page-scroll">Nhà Đất Bán</a></li>
                           <li> <a href="blog.php" class="page-scroll">        </a>        </li>
                           <li> <a href="contact.php" class="page-scroll">     </a>     </li>
                           <?php require_once __DIR__. "/admin/autoload/autoload.php"; ?>
                           <?php if(isset($_SESSION['name_user'])): ?>
                           <li >
                              <a href="/SS4UREALSTATE/dang-nhap.php#"><i class="fa fa-user"></i>My Account</i></a>
                           </li>
                           <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
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
                  <!--
                  <div class="col-md-2 col-sm-1">
                     <a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>
                     <div id="searchbar" class="clearfix">
                        <form id="searchform">
                           <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                           <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                        </form>
                     </div>
                  </div>
               -->
               </div>
            </div>
            <!-- /.container -->
         </nav>
      </header>
      <!--end-->
      <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                    <li data-target="#myCarousel1" data-slide-to="3"></li>
                    <li data-target="#myCarousel1" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><a href="about.html"> <img src="public/admin/images/50561f4d3c5ff82.jpg" style="width:100%; height: 500px" alt="First slide"></a>
                        <div class="carousel-caption">
                            <a href="about.html"><h1 >VINGROUP<br>Real estate information</h1></a>
                        </div>
                    </div>
                    <div class="item"> <img src="public/admin/images/image001-1607456.jpg" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                            <h1>NOVALAND<br>Real estate information</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="public/admin/images/Dat-Xanh.jpg" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                            <h1>ĐẤT XANH GROUP<br>Real estate information</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="public/admin/images/namlong.jpg" style="width:100%; height: 500px" alt="Fourth slide">
                        <div class="carousel-caption">
                            <h1 class="single-title">NAM LONG<br>Real estate information</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="public/admin/images/Dat-Xanh.jpg" style="width:100%; height: 500px" alt="Fifth slide">
                        <div class="carousel-caption">
                            <h1>KHANG ĐIỀN<br>Real estate information</h1>
                        </div>
                    </div>

                </div>
                
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="fa fa-angle-left"></span></a> <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="fa fa-angle-right"></span></a>

            </div>
      <div class="clearfix"></div>
      <div class="container"><h1></h1></div>
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

         <div class="tab-content clearfix">
           <div class="tab-pane active" id="1a">
          
            </div>
            <div class="tab-pane" id="2a">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
            </div>
        <div class="tab-pane" id="3a">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
            </div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
            </div>
         </div>
         <div class="tab-pane" id="5a">
          
            </div>
         </div>
  </div>


<hr></hr>
      <!--footer-->
      <footer>
         <div class="container">
         <div class="row footer-block-main">
            <div class="col-sm-3 col-xs-12">
               <div class="footer-block">
                  <h4>Đường Dẫn</h4>
                  <ul class="list-unstyled">
                     <li><a href="home.html">Trang chủ</a></li>
                     <li class="active"><a>Chủ Đầu Tư</a></li>
                     <li><a href="agents.html">Nhà Đất Bán</a></li>
                     <li><a href="gallery.html">Dự Án</a></li>
                     <li><a href="blog.html">Blog</a></li>
                     <li><a href="contact.html">Liên Hệ</a></li>
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
                        <li><a><i class="fa fa-facebook"></i></a></li>
                        <li><a><i class="fa fa-twitter"></i></a></li>
                        <li><a><i class="fa fa-linkedin"></i></a></li>
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
      <img src="images/top-arrow.png" alt="back-to-top"/>
      </a>
   </body>
</html>