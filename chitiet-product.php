<?php require_once __DIR__. "/admin/autoload/autoload.php";?>
<?php require_once __DIR__. "/admin/layout/header.php";?>
<?php 
    $id = intval(getInput('id'));
    $product = $db->fetchID("product",$id);
    //$ID = $product['category_id'];
    //$category = $db->fetchID("category",$ID);
 ?>
 <title>Chi Tiết Sản Phẩm</title>
<body>
        <div id="wrapper">
            <!---->
            <!--HEADER-->
            
            <!--END HEADER-->


            <!--MENUNAV-->
            <br><br><br><br><br><br>
            <!--ENDMENUNAV-->
            
            <div id="maincontent">
                <div class="container">
                    
                    <div class="col-md-12 bor">
                        

                        <section >
                            <div class="col-md-8 text-center">
                                <img src="<?php echo uploads() ?>product/<?php echo $product['thunbar'] ?>" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
                                
                                <ul>
                                    
                                        <img src="public/admin/images/Home/landmark.png"  width="80" height="80">
                                        <img src="public/admin/images/Home/landmark.png"  width="80" height="80">
                                        <img src="public/admin/images/Home/landmark.png"  width="80" height="80">
                                        <img src="public/admin/images/Home/landmark.png"  width="80" height="80">

                                    
                                   
                                </ul>
                            </div>

                            <div class="col-md-4 bor" style="margin-top: 10px;padding: 10px;background: #cd8225 ">
                               <ul id="right" style="">
                                    <h3 style="color: white"> <?php echo $product['HOUSE_DETAIL_CODE'] ?> </h3>
                                    <!--<li><h4>Thuộc Dự Án: <?php echo $category['name'] ?></h4></li>-->
                                    <p ><strong style="color: white"><b class="price"><?php echo formatPrice(round($product['price'],-6)) ?>đ</b></strong>
                                        <br>
                                    
                               </ul>
                            </div>
                            <div class="col-md-4 bor" style="margin-top: 20px;padding: 30px;">
                            <a href="/SS4UREALSTATE/admin/modules/User/AddCart.php?id=<?php echo $product['id']?>" class="btn btn-primary"> <i class="fa fa-calendar"></i> Liên Hệ Xem Nhà</a>
                        </div>

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
        <p>Mã Block: <?php echo $product['HOUSE_DETAIL_CODE'] ?></p>
        <p>Mã Tòa Nhà: <?php echo $product['BUILDING_ID'] ?></p>
        <p>Tầng Số: <?php echo $product['FLOOR_ID'] ?></p>
    </div>

    <div class="col">
        
        
        <p>Hướng: <?php echo $product['HOUSE_VIEW'];echo $product['HOUSE_DIRECTION'] ?></p>
        <p>Diện Tích Sàn: <?php echo $product['DT_LUNG'] ?></p>
    </div>

    <div class="col">
        <p>Số Phòng: <?php echo $product['SL_PHONG'] ?></p>
        <p>Số WC: <?php echo $product['SL_WC'] ?></p>
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

                    </div>
                </div>

                
            </div>      
        </div>
    <script  src="js/slick.min.js"></script>

    </body>
    <?php require_once __DIR__. "/admin/layout/footer.php";?>