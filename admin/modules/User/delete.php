

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$DeleteAdmin = $db->fetchID("users",$id);
	if(empty($DeleteAdmin))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("users");
	}
   /*Kiểm tra danh mục đã có sản phẩm chưa*/
   $num = $db->delete("users",$id);
   if($num>0)
   {
      $_SESSION['success']="Xóa thành công";
              redirectAdmin3("index.php");
   }
   else
   {
      $_SESSION['error']="Xóa thất bại";
              redirectAdmin3("index.php");
   }
?>
