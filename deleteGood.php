<?php
//管理端 刪除商品
session_start();
$pid = $_GET["pid"];
require('product.php');
$query = "DELETE FROM `product` WHERE `product`.`pid` = '" .$pid. "'";
$result = mysqli_query($link, $query);
//echo "修改成功，即將回到商品列表";
//echo $query;
header("Refresh:0; url = manange.php");

?>

