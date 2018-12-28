<?php 
	require_once __DIR__. "/../../autoload/autoload.php";
	$id = intval(getInput('id'));
	$EditTransaction = $db->fetchID("transaction",$id);
	if(empty($EditTransaction))
	{
		$_SESSION['error']="Dữ Liệu Không Tồn Tại";
		redirectAdmin4("index.php"); 
	}
	$status = $EditTransaction['status'] == 0 ? 1 : 0;
	if ($EditTransaction['status']==1) 
	{
		$_SESSION['error']=" Đơn Hàng Đã Được xử lý!";
		redirectAdmin4("index.php"); 
	}
	$status =1;

   $update = $db->update("transaction",array("status" => $status ), array("id"=>$id));
   if($update>0)
	 {
	    $_SESSION['success']="Cập nhật thành công";
	    $sql = " SELECT product_id,qty FROM orders WHERE transaction_id = $id ";
	    $Order = $db->fetchsql($sql);
	    _debug($Order);
	    foreach ($orders as $item) 
	    {
	    	$idproduct = intval($item['product_id']);
	    	$product = $db->fetchID("product",$idproduct);
	    	$number = $product['number'] - $item['qty'];
	    	$up = $db->update("product",array("number"=>$number,"pay"=>$product['pay']+1),array("id"=>$idproduct));
	    }
	    redirectAdmin4("index.php");
	 }
	else
	 {
	    $_SESSION['error']="Dữ liệu không thay đổi";
	    redirectAdmin4("index.php"); 
	 }
?>