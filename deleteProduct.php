<?php
//客戶端 刪除購物車商品
session_start();
$pid = $_GET["pid"];
$arr = $_SESSION["cart"];
unset($arr[$pid]);
$_SESSION["cart"] = $arr;
//記得扔到session裡面
header("location:showCart.php");
//刪除完跳轉回去
