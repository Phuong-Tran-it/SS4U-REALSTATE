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
            <select>
               <option>Diện Tích</option>  
               <option><= 30 m2</option>
               <option>30 - 50 m2</option>
               <option>50 - 80 m2</option>
               <option>80 - 100 m2</option>
               <option>100 - 150 m2</option>
               <option>150 - 200 m2</option>
               <option>200 - 250 m2</option>
            </select>
         </div>
         <!--
         <div></div>
            <div id="myDIV"class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4">
                <select>
                    <option>Tình Trạng</option>
                    <option>Mới</option>
                    <option>Đang Thi Công</option>
                    <option>Sử Dụng</option>
                </select>
            </div>
            
            
            <div id="myDIV1" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-3">
                <select>
                    <option>Phòng Ngủ</option>
                </select>
            </div>
            <div id="myDIV2" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4">
                <select>
                    <option>Phòng Tắm</option>
                </select>
            </div>
            <div id="myDIV3" class="col-md-3 col-sm-6 col-xs-12 scrollReveal sr-scaleDown sr-delay-4">
                <select>
                    <option>Phòng Tắm</option>
                </select>
            </div>
            -->
         <br><br><br>
         <div class="col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-1 col-xs-10 scrollReveal">
            <div class="find-home">
               <button class="btn btn-lg btn-white" type="submit" name="search" value="Search">Tìm Kiếm</button>
            </div>
         </div>
      </form>
      <!--
      <div class="find-home">
      <button class="btn btn-lg btn-white" onclick="myFunction()">Nâng Cao</button>
      </div>
  -->
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
       $string ="";
       if ($source != "Tình Trạng") 
       {
            $string=" AND TTCANHO_NAME ='$source' ";
       }
       
       if ($source1 != "Hướng Nhà") 
       {
           $string= "$string"." AND HOUSE_DIRECTION = '$source1' ";
       }
       if ($source2 != "Loại Dự Án") 
       {
           $string= "$string"." AND HOUSE_DETAIL_NAME = '$source2' ";
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

