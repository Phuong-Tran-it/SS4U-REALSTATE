

<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	
	$EditProduct = $db->fetchID("product",$id);
	if(empty($EditProduct))
	{
		$_SESSION['error']= "Dữ Liệu Không Tồng Tại";
		redirectAdmin("product");
	}
   /*Kiểm tra danh mục đã có sản phẩm chưa*/
   $num = $db->delete("product",$id);
   if($num>0)
   {
      $_SESSION['success']="Xóa thành công";
              redirectAdmin1("index.php");
   }
   else
   {
      $_SESSION['error']="Xóa thất bại";
              redirectAdmin1("index.php");
   }
?>
