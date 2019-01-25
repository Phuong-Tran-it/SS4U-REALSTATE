<?php
   //debug phun dữ liệu ra
   function _debug($data) {
   
       echo '<pre style="background: #000; color: #fff; width: 100%; overflow: auto">';
       echo '<div>Your IP: ' . $_SERVER['REMOTE_ADDR'] . '</div>';
   
       $debug_backtrace = debug_backtrace();
       $debug = array_shift($debug_backtrace);
   
       echo '<div>File: ' . $debug['file'] . '</div>';
       echo '<div>Line: ' . $debug['line'] . '</div>';
   
       if(is_array($data) || is_object($data)) {
           print_r($data);
       }
       else {
           var_dump($data);
       }
       echo '</pre>';
   }
   //tải dữ liệu lên
   function uploads()
   {
       return base_url() . "public/uploads/";
   }
   
    if ( ! function_exists('redirectStyle'))
   {
       function redirectStyle($url = "")
       {
           header("location: ".base_url()."{$url}");exit();
       }
   }
   //insert dữ liệu
   function postInput($string)
   {
   return isset($_POST[$string]) ? $_POST[$string]:'';
   }
   //lấy dữ liệu
   function getInput($string)
   {
   return isset($_GET[$string]) ? $_GET[$string]:'';
   }
   function base_url()
   {
   return $url ="/SS4UREALSTATE/";
   }
   if (!function_exists('redirectAdmin'))
   {
   function redirectAdmin($url="")
   {
   header("location:".base_url()."admin/modules/category");exit();
   }
   }
   if (!function_exists('redirectAdmin1'))
   {
       function redirectAdmin1($url="")
       {
           header("location:".base_url()."admin/modules/product");exit();
       }
   }
   if (!function_exists('redirectAdmin2'))
   {
       function redirectAdmin2($url="")
       {
           header("location:".base_url()."admin/modules/admin");exit();
       }
   }
   if (!function_exists('redirectAdmin3'))
   {
       function redirectAdmin3($url="")
       {
           header("location:".base_url()."admin/modules/User");exit();
       }
   }
   if (!function_exists('redirectAdmin4'))
   {
       function redirectAdmin4($url="")
       {
           header("location:".base_url()."admin/modules/transaction");exit();
       }
   }
   //kiểm tra xem nếu hàm đó  ko tồn tịa thì mới tạo hàm đó !﻿
   if( ! function_exists('xss_clean') ) {
       function xss_clean($data)
       {
           // Fix &entity\n;
           $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
           $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
           $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
           $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');
   
           // Remove any attribute starting with "on" or xmlns
           $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);
   
           // Remove javascript: and vbscript: protocols
           $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
           $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
           $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);
   
           // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
           $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
           $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
           $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);
   
           // Remove namespaced elements (we do not need them)
           $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);
   
           do
           {
               // Remove really unwanted tags
               $old_data = $data;
               $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
           }
           while ($old_data !== $data);
   
           // we are done...
           return $data;
       }
   }
   //đổi có dấu thành không dấu
   function to_slug($str){
   $str =trim(mb_strtolower($str));
   $str = preg_replace('/(á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ)/','a',$str);
   $str = preg_replace('/(đ)/','d',$str);
   $str = preg_replace('/(í|ì|ỉ|ĩ|ị)/','i',$str);
   $str = preg_replace('/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ)/','o',$str);
   $str = preg_replace('/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự)/','u',$str);
   $str = preg_replace('/(ý|ỳ|ỷ|ỹ|ỵ)/','y',$str);
   $str = preg_replace('/([^a-z0-9-\s])/','',$str);
   $str = preg_replace('/([\s]+)/','-',$str);
   return $str;
   }
   //thêm dấu , vào giá tiền
   function formatPrice($number = 9000000000000)
   {
       $number = intval($number);
       return $number = number_format($number,0,'.',',');
   }
   function sale($number)
   {
       $number = intval($number);
       if($number<5000000)
       {
           return 0;
       }
       else if($number<10000000)
       {
           return 5;
       }
       else
       {
           return 10;
       }
   }
   function unique_multidim_array($array, $key) 
   { 
   $temp_array = array(); 
   $i = 0; 
   $key_array = array(); 
   
   foreach($array as $val) { 
       if (!in_array($val[$key], $key_array)) { 
           $key_array[$i] = $val[$key]; 
           $temp_array[$i] = $val; 
       } 
       $i++; 
   } 
   return $temp_array; 
   } 
   function convert_number_to_words($number) {
 
$hyphen      = ' ';
$conjunction = '  ';
$separator   = ' ';
$negative    = 'âm ';
$decimal     = ' phẩy ';
$dictionary  = array(
0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);
 
if (!is_numeric($number)) {
return false;
}
 
if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
trigger_error(
'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
E_USER_WARNING
);
return false;
}
 
if ($number < 0) {
return $negative . convert_number_to_words(abs($number));
}
 
$string = $fraction = null;
 
if (strpos($number, '.') !== false) {
list($number, $fraction) = explode('.', $number);
}
 
switch (true) {
case $number < 21:
$string = $dictionary[$number];
break;
case $number < 100:
$tens   = ((int) ($number / 10)) * 10;
$units  = $number % 10;
$string = $dictionary[$tens];
if ($units) {
$string .= $hyphen . $dictionary[$units];
}
break;
case $number < 1000:
$hundreds  = $number / 100;
$remainder = $number % 100;
$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
if ($remainder) {
$string .= $conjunction . convert_number_to_words($remainder);
}
break;
default:
$baseUnit = pow(1000, floor(log($number, 1000)));
$numBaseUnits = (int) ($number / $baseUnit);
$remainder = $number % $baseUnit;
$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
if ($remainder) {
$string .= $remainder < 100 ? $conjunction : $separator;
$string .= convert_number_to_words($remainder);
}
break;
}
 
if (null !== $fraction && is_numeric($fraction)) {
$string .= $decimal;
$words = array();
foreach (str_split((string) $fraction) as $number) {
$words[] = $dictionary[$number];
}
$string .= implode(' ', $words);
}
 
return $string;
}
   
   ?>