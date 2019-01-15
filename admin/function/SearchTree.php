<?php 
   require_once __DIR__. "/../../libraries/Database.php";
    require_once __DIR__. "/../../libraries/Function.php";
    $db = new Database;
   $category =$db->fetchAll("category");
   $product =$db->fetchAll("product");
   ?>

                <div class="row">
                    <div class="finder-block-inner">
                        <form  method="POST" action="serch.php" >
                            <div class="col-md-4 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-1">
                                <select id="cmbto" name="VIP" onchange="document.getElementById('selected_text3').value=this.options[this.selectedIndex].text" >
                               <option>Loại Dự Án</option>         
<option> Nhà chung cư dự án LA-ASTORIA2</option>
<option> Nhà chung cư dự án LA-ASTORIA1</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-2">

                                <select id="cmbfrom" name="from" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" >
                                    <option>Tình Trạng</option>
                                    <option>Mới</option>
                                    <option>Đang Thi Công</option>
                                    <option>Sử dụng</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-3">
                                <select id="cmbto" name="to" onchange="document.getElementById('selected_text2').value=this.options[this.selectedIndex].text" >
                                    <option>Loại Bất Động Sản</option>
                                    <option>Tây Nam</option>
                                    <option>Hướng Đông Nam</option>
                                    <option>Hướng Nam</option>
                                </select>
                            </div>
                            <!--
                            <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4">
                                <select>
                                    <option>Tình Trạng</option>
                                    <option>Mới</option>
                                    <option>Đang Thi Công</option>
                                    <option>Sử Dụng</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-1">
                                <select>
                                    <option>Khoảng Giá</option>
                                    <?php $stt=1; foreach ($product as $item): ?>
                                    <option><?php echo $item['BUILDING_NAME'] ?></option>
                                    <?php $stt++; endforeach ?>
                                </select>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-3">
                                <select>
                                    <option>Phòng Ngủ</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4">
                                <select>
                                    <option>Phòng Tắm</option>
                                </select>
                            </div>
                        -->
                        <br><br><br>
                            <div class="col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-1 col-xs-10 scrollReveal sr-scaleDown sr-delay-4">
                                <div class="find-home">
                                    <button class="btn btn-lg btn-white" type="submit" name="search" value="Search">Tìm Kiếm</button>
                                    <button class="btn btn-lg ">Nâng Cao</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $conn=mysqli_connect("localhost","root","","realestate") ;
        if(isset($_POST['search'])) 
        {
        $source = mysqli_real_escape_string($conn,$_POST['from']);
        $source1 = mysqli_real_escape_string($conn,$_POST['to']); //from value
        $source2 = mysqli_real_escape_string($conn,$_POST['VIP']);
       $string ="";
        if ($source != "Tình Trạng") 
        {
             $string=" AND TTCANHO_NAME ='$source' ";
        }
       
        if ($source1 != "Loại Bất Động Sản") 
        {
            $string= "$string"." AND HOUSE_DIRECTION = '$source1' ";
        }
        if ($source2 != "Loại Dự Án") 
        {
            $string= "$string"." AND HOUSE_DETAIL_NAME = '$source2' ";
        }

     //   _debug($string);die();
        }
       
        $sql = "SELECT * FROM product where 1 = 1 "."$string";
        $ProductVIP = $db->fetchsql($sql);
        ?>
        