<?php 
   require_once __DIR__. "/../../libraries/Database.php";
    require_once __DIR__. "/../../libraries/Function.php";
    $db = new Database;
   $category =$db->fetchAll("category");
   $product =$db->fetchAll("product");
   $product1 = unique_multidim_array($product,'category_id');
   $product2 = unique_multidim_array($product,'HOUSE_DIRECTION');
   $product3 = unique_multidim_array($product,'TTCANHO_NAME');
   $product4 = unique_multidim_array($product,'HOUSE_DETAIL_NAME');   
   $product5 = unique_multidim_array($product,'SL_PHONG');
   $product6 = unique_multidim_array($product,'SL_WC');
   $product7 = unique_multidim_array($product,'FLOOR_ID');
   ?>
<div class="row">
   <div class="finder-block-inner">
      <form  method="POST" action="serch.php" >
         <div class="col-md-3 col-sm-6 col-xs-12">
            <select id="cmbto" name="VIP" onchange="document.getElementById('selected_text3').value=this.options[this.selectedIndex].text" >
               <option>Loại Dự Án</option>
               <?php foreach ($product4 as $item): ?>
               <option><?php echo $item['HOUSE_DETAIL_NAME'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal ">
            <select id="cmbfrom" name="from" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" >
               <option>Tình Trạng</option>
               <?php foreach ($product3 as $item): ?>
               <option><?php echo $item['TTCANHO_NAME'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal ">
            <select id="cmbto" name="to" onchange="document.getElementById('selected_text2').value=this.options[this.selectedIndex].text" >
               <option>Hướng Nhà</option>
               <?php foreach ($product2 as $item): ?>
               <option><?php echo $item['HOUSE_DIRECTION'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12 scrollReveal ">
            <select id="DienTich" name="DienTich" onchange="document.getElementById('selected_text3').value=this.options[this.selectedIndex].text" >
               <option>Diện Tích</option>
               <option><= 30 m2</option>
               <option>30 - 50 m2</option>
               <option>50 - 80 m2</option>
               <option>80 - 100 m2</option>
               <option>100 - 150 m2</option>
               <option>150 - 200 m2</option>
               <option>200 - 250 m2</option>
               <option>>= 250 m2</option>
            </select>
         </div>
         <div id="myDIV" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4"style="display:none;">
            <select>
               <option>Giá Tiền</option>
               <option></option>
               <option>Đang Thi Công</option>
               <option>Sử Dụng</option>
            </select>
         </div>
         <div id="myDIV1" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-3" style="display:none;">
            <select id="Floor" name="Floor" onchange="document.getElementById('selected_text6').value=this.options[this.selectedIndex].text" >
               <option>Tầng</option>
               <?php foreach ($product7 as $item): ?>
               <option><?php echo $item['FLOOR_ID'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <div id="myDIV2" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4" style="display:none;">
            <select id="SLP" name="SLP" onchange="document.getElementById('selected_text4').value=this.options[this.selectedIndex].text" >
               <option>Phòng Ngủ</option>
               <?php foreach ($product5 as $item): ?>
               <option><?php echo $item['SL_PHONG'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <div id="myDIV3" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4" style="display:none;">
            <select id="SL_WC" name="SL_WC" onchange="document.getElementById('selected_text5').value=this.options[this.selectedIndex].text" >
               <option>Phòng Tắm</option>
               <?php foreach ($product6 as $item): ?>
               <option><?php echo $item['SL_WC'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
         <br><br><br>
         <div class="col-md-6">
            <div class="find-home">
               <button class="btn btn-lg btn-white" type="submit" name="search" value="Search">Tìm Kiếm</button>
            </div>
         </div>
      </form>
      <div class="col-md-6">
         <div class="find-home">
            <button id="click"class="btn btn-lg btn-white" onclick="myFunction()">Nâng Cao</button>
         </div>
      </div>
   </div>
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
       $source3 = mysqli_real_escape_string($conn,$_POST['DienTich']);
       $source4 = mysqli_real_escape_string($conn,$_POST['SLP']);
       $source5 = mysqli_real_escape_string($conn,$_POST['SL_WC']);
       $source6 = mysqli_real_escape_string($conn,$_POST['Floor']);
       $string ="";
       //Diện Tích
       if ($source3 == "<= 30 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 0 AND 30 ";
       }
        
       if ($source3 == "30 - 50 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 30 AND 50 ";
       }
       if ($source3 == "50 - 80 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 50 AND 80 ";
       }
       if ($source3 == "80 - 100 m2") 
       {
            $string="  AND DT_TIMTUONG BETWEEN 80 AND 100 ";
       }
       if ($source3 == "100 - 150 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 100 AND 150 ";
       }
       if ($source3 == "150 - 200 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 150 AND 200 ";
       }
       if ($source3 == "200 - 250 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 200 AND 250 ";
       }
       if ($source3 == ">= 250 m2") 
       {
            $string=" AND DT_TIMTUONG BETWEEN 250 ";
       }
       //END
       //stt
       if ($source != "Tình Trạng") 
       {
            $string=" AND TTCANHO_NAME ='$source' ";
       }
       //view
       if ($source1 != "Hướng Nhà") 
       {
           $string= "$string"." AND HOUSE_DIRECTION = '$source1' ";
       }
       //loai du an
       if ($source2 != "Loại Dự Án") 
       {
           $string= "$string"." AND HOUSE_DETAIL_NAME = '$source2' ";
       }
       
       // sl phong
       if ($source4 != "Phòng Ngủ") 
       {
           $string= "$string"." AND SL_PHONG = '$source4' ";
       }
       if ($source5 != "Phòng Tắm") 
       {
           $string= "$string"." AND SL_WC = '$source5' ";
       }
       if ($source6 != "Tầng") 
       {
           $string= "$string"." AND FLOOR_ID = '$source6' ";
       }
       $sql = "SELECT * FROM product where 1 = 1 "."$string";
       $ProductVIP = $db->fetchsql($sql);
       
   }
   
   ?>
<script>
   function myFunction() {
     var x = document.getElementById("myDIV");
     if (x.style.display === "none") {
       x.style.display = "block";
     } else {
       x.style.display = "none";
     }
     var y = document.getElementById("myDIV1");
     if (y.style.display === "none") {
       y.style.display = "block";
     } else {
       y.style.display = "none";
     }
     var z = document.getElementById("myDIV2");
     if (z.style.display === "none") {
       z.style.display = "block";
     } else {
       z.style.display = "none";
     }
     var c = document.getElementById("myDIV3");
     if (c.style.display === "none") {
       c.style.display = "block";
     } else {
       c.style.display = "none";
     }
   
   }
</script>