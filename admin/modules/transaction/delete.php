

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$EditProduct = $db->fetchID("transaction",$id);
	if(empty($EditProduct))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("product");
	}
   /*Kiểm tra danh mục đã có sản phẩm chưa*/
   $num = $db->delete("transaction",$id);
   if($num>0)
   {
      $_SESSION['success']="Xóa thành công";
              redirectAdmin4("index.php");
   }
   else
   {
      $_SESSION['error']="Xóa thất bại";
              redirectAdmin4("index.php");
   }
?>
