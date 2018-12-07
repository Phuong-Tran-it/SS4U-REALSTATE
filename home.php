<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="public/admin/images/REALSTATE.png"/>
        <title>Trang Chủ</title>
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
                        <div class="col-md-7 col-sm-8 remove-left">
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="hidden active">
                                        <a href="#page-top" class="page-scroll"></a>
                                    </li>
                                    <li class="active"><a href="home.php" class="page-scroll">Trang Chủ</a></li>
                                    <li><a href="about.php" class="page-scroll">Giới Thiệu</a></li>
                                    <li><a href="agents.php" class="page-scroll">Đại Diện</a></li>
                                    <li><a href="gallery.php" class="page-scroll">Dự Án</a></li>
                                    <li> <a href="blog.php" class="page-scroll">Blog</a></li>
                                    <li> <a href="contact.php" class="page-scroll">Liên Hệ</a></li>
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
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="public/admin/images/Home/building.png" style="width:100%; height: 720px" alt="First slide">
                    <div class="carousel-caption">
                        <div class="contact-form">
                            <input type="text" placeholder="Tên">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Mật Khẩu">
                            <input type="password" placeholder="Nhập Lại Mật Khẩu">
                            <div class="buttons">
                                <a>Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="public/admin/images/Home/villavip.png" style="width:100%; height: 720px" alt="First slide">
                    <div class="carousel-caption">
                        <div class="contact-form">
                            <input type="text" placeholder="Tên">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Mật Khẩu">
                            <input type="password" placeholder="Nhập Lại Mật Khẩu">
                            <div class="buttons">
                                <a>Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="public/admin/images/Home/banner3.png" style="width:100%; height: 720px" alt="First slide">
                    <div class="carousel-caption">
                        <div class="contact-form">
                            <input type="text" placeholder="Tên">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Mật Khẩu">
                            <input type="password" placeholder="Nhập Lại Mật Khẩu">
                            <div class="buttons">
                                <a>Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="fa fa-angle-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-angle-right"></span></a>
        </div>
        <div class="clearfix"></div>
        <!--Thông Tin Liên Lạc-->
        <?php require_once __DIR__. "/layouts/lienlac.php";?>
        <!--end-->
        <!--adertise block
            <section class="advertise-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="advertise-block-one scrollReveal sr-bottom sr-delay-1">
                                <h4>sell my home</h4>
                                <p>Lorem Ipsum is simply dummy text of the prin ting and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and nutypodf ty</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="advertise-block-two scrollReveal sr-bottom sr-delay-2">
                                <h4>how can we help you</h4>
                                <p>Lorem Ipsum is simply dummy text of the prin ting and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and nutypodf ty</p>
                            </div>
            
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div> 
            </section>
            --->
        <!--end--->
        <!--cây tìm kiếm-->
        <?php require_once __DIR__. "/function/SearchTree.php";?>
        <!--end-->
        <!--service block-->
        <section class="service-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Dịch Vụ Của Chúng Tôi</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 grid remove-right-padd">
                        <figure class="effect-marley scrollReveal sr-bottom sr-delay-1">
                            <img alt="img11" src="public/admin/images/Home/Image1.png">
                            <figcaption>
                                <h2><span>Mua Bán</span></h2>
                                <p>Mua Bán Nhà, Đất Nền, Chung Cư</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 grid remove-left-padd">
                        <figure class="effect-marley scrollReveal sr-bottom sr-delay-2">
                            <img alt="img11" src="public/admin/images/Home/Image2.png">
                            <figcaption>
                                <h2><span style="font-family: Helvetica, Arial">Cho Thuê</span></h2>
                                <p>Cho Thuê Bất Động Sản</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 grid remove-right-padd">
                        <figure class="effect-marley scrollReveal sr-bottom sr-delay-1">
                            <img alt="img11" src="public/admin/images/Home/Image3.png">
                            <figcaption>
                                <h2><span style="font-family: Helvetica, Arial">Ký Gửi</span></h2>
                                <p>Ký Gửi Bất Động Sản Không Sử Dụng</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 grid remove-left-padd">
                        <figure class="effect-marley scrollReveal sr-bottom sr-delay-2">
                            <img alt="img11" src="public/admin/images/Home/Image4.png" style="width:566px; height: 257px">
                            <figcaption>
                                <h2><span style="font-family: Helvetica, Arial">Đặt Chỗ</span></h2>
                                <p>Nhận Đặt Chỗ những dự án bạn quan tâm.</p>
                                <!--<a href="#">View more</a>-->
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--end-->
        <!--counter block-->
        <section class="counter-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Lượng Tương Tác</h1>
                </div>
            </div>
            <div class="counter-full-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='counter' data-slno='1' data-min='0' data-max='1000000' data-delay='.5' data-increment=4>98372</div>
                            <p>Khách Hàng Hài Lòng</p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='counter' data-slno='1' data-min='0' data-max='170' data-delay='8' data-increment="1">390</div>
                            <p>Đối Tác</p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='counter' data-slno='1' data-min='0' data-max='500' data-delay='.5' data-increment="11">1200</div>
                            <p>Dự Án Hoàn Thành</p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='counter' data-slno='1' data-min='0' data-max='169' data-delay='8' data-increment="1">1629</div>
                            <p>Kế hoạch kinh doanh</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!---end--->
        <!--gallery block-->
        <section class="gallery-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Dự Án</h1>
                </div>
                <ul class="bxslider">
                    <li><img src="public/admin/images/Home/Image6.png"/></li>
                    <li><img src="public/admin/images/Home/Image7.png"/></li>
                    <li><img src="public/admin/images/Home/Image8.png"/></li>
                    <li><img src="public/admin/images/Home/Image9.png"/></li>
                    <li><img src="public/admin/images/Home/Image10.png"/></li>
                </ul>
            </div>
        </section>
        <!---end--->
        <!--gallery block-->
        <section class="category-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Thể Loại</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleDown sr-delay-1">
                            <img alt="img10" src="public/admin/images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[42 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleDown sr-delay-2">
                            <img alt="img10" src="public/admin/images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[22 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleDown sr-delay-3">
                            <img alt="img10" src="public/admin/images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[12 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleUp sr-delay-1">
                            <img alt="img10" src="public/admin/images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[35 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleUp sr-delay-2">
                            <img alt="img10" src="images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[19 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid slideanim">
                        <figure class="effect-selena scrollReveal sr-scaleUp sr-delay-3">
                            <img alt="img10" src="images/Home/dep.png" style="width:365px; height: 300px">
                            <figcaption>
                                <h2>Lorem <span>Ipsum</span></h2>
                                <p>[42 properties]</p>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->
        <!--service block-->
        <section class="recent-property-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Bất Động Sản Đang Hot</h1>
                </div>
                <div class="row">
                    <div class="product-layout col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb transition options">
                            <h3 class="quick-view">50000$ - 80000$</h3>
                            <div class="image scrollReveal sr-bottom sr-delay-1">
                                <a>
                                <img class="img-responsive" src="images/Home/landmark.png" style="width:465px; height: 301px">
                                </a>
                            </div>
                            <div class="property-info scrollReveal sr-bottom sr-delay-2">
                                <h4>Building : Land Mark 81</h4>
                                <h4>112 m²  / 2 Phòng Tắm</h4>
                                <h4>4 Phòng Ngủ / Tầng 80</h4>
                            </div>
                        </div>
                    </div>
                    <div class="product-layout col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb transition options">
                            <h3 class="quick-view">40000$ /60000$</h3>
                            <div class="image scrollReveal sr-bottom sr-delay-3">
                                <a>
                                <img class="img-responsive" src="images/Home/kingdom.png"style="width:465px; height: 301px">
                                </a>
                            </div>
                            <div class="property-info scrollReveal sr-bottom sr-delay-4">
                                <h4>Căn Hộ Kingdom 101</h4>
                                <h4>80 m²  / 2 Phòng Tắm</h4>
                                <h4>3 Phòng Ngủ / 1.100 Căn</h4>
                            </div>
                        </div>
                    </div>
                    <div class="product-layout col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb transition options">
                            <h3 class="quick-view">60000$ - 90000$</h3>
                            <div class="image scrollReveal sr-bottom sr-delay-1">
                                <a>
                                <img class="img-responsive" src="images/Home/dragon.ong.png"style="width:465px; height: 301px">
                                </a>
                            </div>
                            <div class="property-info scrollReveal sr-bottom sr-delay-2">
                                <h4>Căn hộ Dragon Riverside City </h4>
                                <h4>100 m²  / 2 Phòng Tắm</h4>
                                <h4>4 Phòng Ngủ / 1000 Căn</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--advantage block-->
        <section class="advantage-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Lợi Ích Sử Dụng Dịch Vụ Của Chúng Tôi</h1>
                </div>
            </div>
            <div class="advantage-block-full-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                            <div class="advantage-inner-block scrollReveal sr-bottom sr-delay-1">
                                <figure class="icon">
                                    <i class="fa fa-location-arrow fa-3x"></i>
                                </figure>
                                <h2 class="head-title">Vị Trí Khác Nhau</h2>
                                <p class="desc"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="advantage-inner-block scrollReveal sr-bottom sr-delay-2">
                                <figure class="icon">
                                    <i class="fa fa-camera fa-3x"></i>
                                </figure>
                                <h2 class="head-title">Xem Trước</h2>
                                <p class="desc">Xem trước căn hộ mình muốn mua</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="advantage-inner-block scrollReveal sr-bottom sr-delay-3">
                                <figure class="icon">
                                    <i class="fa fa-lock fa-3x"></i>
                                </figure>
                                <h2 class="head-title">Bảo Mật</h2>
                                <p class="desc">Mọi thông tin khách hàng và giao dịch đều được bảo mật tuyệt đối</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="advantage-inner-block scrollReveal sr-bottom sr-delay-4">
                                <figure class="icon">
                                    <i class="fa fa-money fa-3x"></i>
                                </figure>
                                <h2 class="head-title">Không Hoa Hồng</h2>
                                <p class="desc">Mua đúng giá</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->
        <!--testimonials-->
        <section class="testimonial-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>Phản Hồi Khách Hàng</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="testblock scrollReveal sr-bottom sr-delay-1">
                            <div class="media">
                                <div class="media-left">
                                    <img style="width:60px" class="media-object" src="images/Home/Image18.png">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Anh Châu</h4>
                                </div>
                            </div>
                            <p>Cảm ơn rất nhiều vì phản hồi nhanh. Tôi đã rất ấn tượng. giải pháp của bạn là tuyệt vời! Thẩm quyền của bạn là hợp lý</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="testblock scrollReveal sr-bottom sr-delay-2">
                            <div class="media">
                                <div class="media-left">
                                    <img style="width:60px" class="media-object" src="images/Home/Image19.png">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Anh Quý</h4>
                                </div>
                            </div>
                            <p>Cảm ơn rất nhiều vì phản hồi nhanh. Tôi đã rất ấn tượng. giải pháp của bạn là tuyệt vời! Thẩm quyền của bạn là hợp lý</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="testblock scrollReveal sr-bottom sr-delay-1">
                            <div class="media">
                                <div class="media-left">
                                    <img style="width:60px" class="media-object" src="images/Home/Image20.png">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Anh Lộc</h4>
                                </div>
                            </div>
                            <p>Cảm ơn rất nhiều vì phản hồi nhanh. Tôi đã rất ấn tượng. giải pháp của bạn là tuyệt vời! Thẩm quyền của bạn là hợp lý</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="testblock scrollReveal sr-bottom sr-delay-2">
                            <div class="media">
                                <div class="media-left">
                                    <img style="width:60px" class="media-object" src="images/Home/Image21.png">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Anh Vỹ</h4>
                                </div>
                            </div>
                            <p>Cảm ơn rất nhiều vì phản hồi nhanh. Tôi đã rất ấn tượng. giải pháp của bạn là tuyệt vời! Thẩm quyền của bạn là hợp lý</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->
        <!--testimonials-->
        <section class="staff-block">
            <div class="container">
                <div class="text-head text-center">
                    <h1>nhân viên của chúng tôi</h1>
                </div>
                <div class="staff-team">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 team_gd1 scrollReveal sr-bottom sr-delay-1">
                            <div class="team_pos">
                                <img alt=" " src="images/Home/images.png" class="img-responsive" style="width:268px; height: 315px">
                                <div class="team_info">
                                    <div class="social-icons-effect">
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h4><a>Trần Nhật D</a></h4>
                            <p>Người Bán Hàng</p>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 team_gd1 scrollReveal sr-bottom sr-delay-2">
                            <div class="team_pos">
                                <img alt=" " src="images/Home/images.png" class="img-responsive" style="width:268px; height: 315px">
                                <div class="team_info">
                                    <div class="social-icons-effect">
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h4><a>Trấn Quốc C</a></h4>
                            <p>Quản Lý</p>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 team_gd1 scrollReveal sr-bottom sr-delay-3">
                            <div class="team_pos">
                                <img alt=" " src="images/Home/images.png" class="img-responsive" style="width:268px; height: 315px">
                                <div class="team_info">
                                    <div class="social-icons-effect">
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h4><a>Trần Văn A</a></h4>
                            <p>Người Bán Hàng</p>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 team_gd1 scrollReveal sr-bottom sr-delay-4">
                            <div class="team_pos">
                                <img alt=" " src="images/Home/images.png" class="img-responsive" style="width:268px; height: 315px">
                                <div class="team_info">
                                    <div class="social-icons-effect">
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                        <a class="face_one" href="#"><i aria-hidden="true" class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h4><a>Nguyễn Văn B</a></h4>
                            <p>Quản Lý</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!--end-->
        <!--footer-->
        <footer>
            <div class="container">
                <div class="row footer-block-main">
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-block">
                            <h4>Đường Dẫn</h4>
                            <ul class="list-unstyled">
                                <li class="active"><a href="home.php"> Chủ</a></li>
                                <li><a href="about.php">Giới Thiệu</a></li>
                                <li><a href="agents.php">Người Quản Lý</a></li>
                                <li><a href="gallery.php">Dự Án</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Liên Hệ</a></li>
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
                            <h4>Mạng Xã Hội</h4>
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
                    
                    © 2018 All right reserved. Designed by <a href="http://www.ss4u.vn/" target="_blank">PhuongTran.</a>
                </div>
            </div>
        </footer>
        <!--end-->
        <!--back to top--->
        <a id="back-to-top" class="scrollTop back-to-top" href="javascript:void(0);" style="display: none;">
        <img src="public/admin/images/top-arrow.png" alt="back-to-top"/>
        </a>
        <script>
            $('.bxslider').bxSlider({
                moveSlides: 1,
                minSlides: 4,
                maxSlides: 3,
                slideWidth: 555,
                slideMargin: 10,
                infiniteLoop: true,
            });
        </script>
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
    </body>
</html>