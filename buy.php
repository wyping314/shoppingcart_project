<?php
//客戶端 結帳頁面
include "product.php";
session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購物平台</title>
<style type="text/css">
body {width:600px; margin:10px auto;}
#content {background-color:#D2CFDE; margin:20px; padding:20px; border:2px solid ivory; font-size: 14pt; color:#62555C; line-height:28px}
a {color:#62555C}
#sel td {background-color: #D2CFDE; color: ivory}
#tot {font-weight: bold; color: #62555C}
</style>
</head>
<body>
<div id="content">
<h2 align="center">結帳</h2>
<table border="2" cellpadding="5" align="center" bgcolor="#F6F4F5">
<tr><th>商品名稱</th><th>價格</th><th>數量</th><th>金額</th></tr>
<?php
if (isset($_SESSION["cart"])) {
   $total = 0;
   foreach ($_SESSION["cart"] as $pid => $cnt) {
      $pay = $product[$pid][1]*$cnt;
      $total += $pay;
      echo "<tr><td>{$product[$pid][0]}</td><td>{$product[$pid][1]}</td><td>$cnt</td><td>$pay</td></tr>\n";
   }
   if($total<=1000){
      $total*=0.9;
   }
   echo "<tr><th colspan=4>應付金額：<span id=\"tot\">NT\$ ".number_format($total*0.8)."</span> 元</th></tr>\n";
}
//unset($_SESSION["cart"]);
?>
</table>
<h3 align="center"><a href="update.php">重新購物</a></h3>
</div>
</body>
</html>
