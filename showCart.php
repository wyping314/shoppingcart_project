<?php
//客戶端 顯示購物車
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
a {color: #62555C}
</style>
</head>
<body>
<div id="content">
<h2 align="center">購物車內容</h2>
<table border="2" cellpadding="5"bgcolor="#F6F4F5" align="center">
<tr><th>商品名稱</th><th>價格</th><th>數量</th><th>刪除商品</th></tr>
<?php
if (isset($_SESSION["cart"])) {
foreach ($_SESSION["cart"] as $pid => $cnt)
   echo "<tr>
   <td>{$product[$pid][0]}</td>
   <td>NT\${$product[$pid][1]}</td>
   <td>$cnt</td>
   <td><a href=\"deleteProduct.php?pid=$pid\">刪除商品</td>
   </tr>\n";
}
//echo "<th><a href="deleteCart.php"></a>刪除商品</th>";
?>
</table>
<h3 align="center"><a href="addCart.php">繼續購物</a> <a href="buy.php">結帳</a></h3>
</div>
</body>
</html>
