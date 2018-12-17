

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$DeleteAdmin = $db->fetchID("admin",$id);
	if(empty($DeleteAdmin))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("admin");
	}
   /*Kiểm tra danh mục đã có sản phẩm chưa*/
   $num = $db->delete("admin",$id);
   if($num>0)
   {
      $_SESSION['success']="Xóa thành công";
              redirectAdmin2("index.php");
   }
   else
   {
      $_SESSION['error']="Xóa thất bại";
              redirectAdmin2("index.php");
   }
?>
