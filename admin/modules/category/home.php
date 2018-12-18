<?php 
	 require_once __DIR__. "/../../autoload/autoload.php";
   $id = intval(getInput('id'));
   
   $Editcategory = $db->fetchID("category",$id);
   if(empty($Editcategory))
   {
      $_SESSION['error']= "Dữ Liệu Không Tồng Tại";
      redirectAdmin("index.php");
   }
   $home = $Editcategory['home'] == 0 ? 1 : 0;
   $update = $db->update("category",array("home" => $home ), array("id"=>$id));
   if($update>0)
	 {
	    $_SESSION['success']="Cập nhật thành công";
	    redirectAdmin("index.php");
	 }
	else
	 {
	    $_SESSION['error']="Dữ liệu không thay đổi";
	    redirectAdmin("index.php"); 
	 }
?>
