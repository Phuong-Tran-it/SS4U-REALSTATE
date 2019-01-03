<?php 
   require_once __DIR__. "/../../autoload/autoload.php";
   require_once __DIR__. "/../../layout/header.php";
   if(!isset($_SESSION['name_id']))
   {
   echo "<script>alert('Bạn phải đăng nhập để thực hiện chức năng này!');location.href='/../../../SS4UREALSTATE/home.php'</script>";
      }
          $id = intval(getInput('id'));
    $product = $db->fetchID("product",$id);
    //kiểm tra session tồn tại hay không
    if(! isset($_SESSION['cart'][$id]))
    {
    	$_SESSION['cart'][$id]['HOUSE_DETAIL_CODE'] = $product['HOUSE_DETAIL_CODE'];
    	$_SESSION['cart'][$id]['thunbar'] = $product['thunbar'];
    	$_SESSION['cart'][$id]['price'] = ((100-$product['sale'])* $product['price'])/100;
    	$_SESSION['cart'][$id]['id'] = $product['id'];
    	$_SESSION['cart'][$id]['qty'] = 1;
    }
    else
    {
    	$_SESSION['cart'][$id]['qty'] +=1;
    }
    echo "<script>location.href='Gio-Hang.php'</script>";
   ?>