<?php require_once __DIR__. "/../autoload/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="/SS4UREALSTATE/public/admin/images/REALSTATE.png"/>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url() ?>public/admin/css/scrolling-nav.css" rel="stylesheet" media="all">
      <link href="<?php echo base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url() ?>public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url() ?>public/admin/css/bxslider.css" rel="stylesheet" type="text/css" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url() ?>public/admin/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url() ?>public/admin/css/responsive.css" rel="stylesheet">
      <script src="<?php echo base_url() ?>public/admin/js/jquery.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/scrolling-nav.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/scrollreveal.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/counterup.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/waypoints.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>public/admin/js/bxslider.js" type="text/javascript"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/instafeed.min.js"></script>
      <script src="<?php echo base_url() ?>/admin/js/custom.js" type="text/javascript"></script>
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
                           <a href="/SS4UREALSTATE/home.php"><img src="/SS4UREALSTATE/public/admin/images/logoCTY.png" alt="logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8 remove-left">
                     <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                           <li class="hidden active">
                              <a href="#page-top" class="page-scroll"></a>
                           </li>
                           <li ><a href="/SS4UREALSTATE/home.php" class="page-scroll">Trang Chủ</a></li>
                           <li><a href="/SS4UREALSTATE/investor.php" class="page-scroll">Giới Thiệu</a></li>
                           <li><a href="/SS4UREALSTATE/homesell.php" class="page-scroll">Đại Diện</a></li>
                           <li> <a href="blog.php" class="page-scroll">        </a>        </li>
                           <li> <a href="contact.php" class="page-scroll">     </a>     </li>
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
                  <!-- /navbar-collapse 
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