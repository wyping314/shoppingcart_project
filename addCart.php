<?php
//客戶端 顯示商品列表
include "product.php";
session_start() ;
$sel="";
if (isset($_GET["pid"])) {
      $sel = $_GET["pid"];
      if (isset($_SESSION["cart"][$sel]))
           $_SESSION["cart"][$sel]++;
      else
           $_SESSION["cart"][$sel]=1;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購物平台</title>
<style type="text/css">
body {width:800px; margin:10px auto;}
#content {background-color:#D2CFDE; margin:20px; padding:20px; border:2px solid ivory; font-size: 14pt; color:#62555C; line-height:28px}
a {color:#62555C}
#sel td {background-color: #BCB7CD; color: #fff}
</style>
</head>
<body>
<div id="content">
<h2 align="center">商品一覽表</h2>
<table border="2" cellpadding="5" bgcolor="#F6F4F5" align="center">
<tr><th>商品名稱</th><th>價格</th><th>剩餘數量</th><th>購物</th></tr>
<?php
foreach ($product as $pid => $pInfo)
    if ($pid == $sel) 
        echo "<tr id=\"sel\"><td>{$pInfo[0]}</td><td>NT\${$pInfo[1]}</td><td>{$pInfo[2]}</td><td><a href=\"addCart.php?pid=$pid\">放入購物車</a></td></tr>\n";
	else 
	    echo "<tr><td>{$pInfo[0]}</td><td>NT\${$pInfo[1]}</td><td>{$pInfo[2]}</td><td><a href=\"addCart.php?pid=$pid\">放入購物車</a></td></tr>\n";
?>
</table>
<h3 align="center"><a href="showCart.php">查看購物車內容</a></h3>
</div>
</body>
</html>