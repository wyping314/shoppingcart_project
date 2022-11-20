<?php
//結帳後更新商品資訊
session_start();
include ("product.php");
require('product.php');
if ($_SESSION["cart"]) {
  //扣除庫存
  foreach($_SESSION["cart"] as $pid =>$v)
  {
     $num = $product[$pid][2]-$v;
     $query = "UPDATE `product` SET `number` = '" .$num."' WHERE `pid` = '" . $pid ."'  ";
     $result = mysqli_query($link, $query);
     echo $query;
  }
  unset($_SESSION["cart"]);
  header("Refresh:0; url = addCart.php");
}else{
     echo '結帳失敗';
}


