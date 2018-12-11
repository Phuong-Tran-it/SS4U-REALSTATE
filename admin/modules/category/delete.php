

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$EditCategory = $db->fetchID("category",$id);
	if(empty($EditCategory))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("category");
	}
   /*Kiểm tra danh mục đã có sản phẩm chưa*/
   $num = $db->delete("category",$id);
   if($num>0)
   {
      $_SESSION['success']="Xóa thành công";
              redirectAdmin("index.php");
   }
   else
   {
      $_SESSION['error']="Xóa thất bại";
              redirectAdmin("index.php");
   }
?>
