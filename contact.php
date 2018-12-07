

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/REALSTATE.png"/>
        <title>Liên Hệ Cho Chúng Tôi</title>

        <!-- Bootstrap core CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
        <script src="js/scrollreveal.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
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
                                    <a href="index.php"><img src="images/logoCTY.png" alt="logo"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-8 remove-left">
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="hidden active">
                                        <a href="#page-top" class="page-scroll"></a>
                                    </li>
                                    <li><a href="home.php" class="page-scroll">Trang Chủ</a></li>
                                    <li><a href="about.php" class="page-scroll">Giới Thiệu</a></li>
                                    <li><a href="agents.php" class="page-scroll">Đại Diện</a></li>
                                    <li><a href="gallery.php" class="page-scroll">Dự Án</a></li>
                                    <li> <a href="blog.php" class="page-scroll">Blog</a></li>
                                    <li class="active"> <a class="page-scroll">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /navbar-collapse -->
                        <div class="col-md-2 col-sm-1">
                            <a class="search" id="searchtoggl"><i class="fa fa-search"></i></a>
                            <div id="searchbar" class="clearfix">
                                <form id="searchform">
                                    <button type="submit" id="searchsubmit" class="fa fa-search fa-lg"></button>
                                    <input type="search" name="search-icon" id="search-icon" placeholder="Keywords..." autocomplete="off">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
        </header>
        <!--end-->
        <!--Thông Tin Liên Lạc-->
        <?php require_once __DIR__. "/layouts/lienlac.php";?>
        <!--end-->
        <section class="text-center" id="contact">
            <div class="container">
                <div class="row no-margin  ">
                    <div class="col-lg-12 col-xs-12 text-center ">
                        <h1 class="section-heading">LIÊN HỆ CHO CHÚNG TÔI </h1>
                        <p>Điền những thông tin dưới đây </p>

                    </div>
                </div>
                <div class="height-60"> </div>
                <div class="row "> 
                    <div class="col-md-6 col-sm-6 ">
                        <div class="row">
                            <div class="col-md-12 contact "> <i class="fa fa-map-marker fa-2x"></i>
                                <p class="dark">15A Hoang Hoa Tham Street,<br>Binh Thanh district HCM City.</p>
                            </div>
                            <div class="col-md-12 contact  "> <i class="fa fa-envelope-o fa-2x"></i>
                                <p class="dark">demo@info.com</p>
                            </div>
                            <div class="col-md-12 contact   "> <i class="fa fa-phone fa-2x"></i>
                                <p class="dark">xxxxxxxxx</p>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> 
                    <div class="col-md-6 col-sm-6"> 
                        <div class="scrollReveal sr-right sr-delay-1" > 
                            <form id="contactForm" name="sentMessage">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" aria-invalid="false" required="" placeholder="Name" class="form-control" id="name">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" required="" placeholder="Email" class="form-control" id="email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea aria-invalid="false" required="" placeholder="Message here..." rows="4" class="form-control" id="message" name="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button class="btn btn-lg btn-black-border" type="submit">Send Message</button>
                            </form> 
                        </div>
                    </div>	
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.085293515743!2d106.68925701428722!3d10.80477926162545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c463ae27d9%3A0x3124f73d4c128ad3!2zMTVBIEhvw6BuZyBIb2EgVGjDoW0sIFBoxrDhu51uZyA2LCBCw6xuaCBUaOG6oW5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1543248902039" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </section>

        <!--footer-->
        <footer>
            <div class="container">
                <div class="row footer-block-main">
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block"><h4>quick links</h4>
                            <ul class="list-unstyled">
                                <li><a href="home.php">Trang Chủ</a></li>
                                <li><a href="about.php">Giới Thiệu</a></li>
                                <li><a href="agents.php">Đại Diện</a></li>
                                <li><a href="gallery.php">Dự Án</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li class="active"><a href="contact.php">Liên Hệ</a></li>
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
                        <div class="footer-block"><h4>instagram post</h4>
                            <div class="row gallery-footer">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block"><h4>social media</h4>
                            <div class="footer-social">
                                <ul class="list-unstyled">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                    <li><a><i class="fa fa-google-plus"></i></a></li>
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
