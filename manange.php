<?php
include "product.php";
session_start() ;

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購物平台</title>
<style type="text/css">
body {width:800px; margin:10px auto;}
#content {background-color:#DCE2E5; margin:20px; padding:20px; border:2px solid ivory; font-size: 14pt; color:#62555C; line-height:28px}
a {color:#62555C}
#sel td {background-color: #DCE2E5; color: #fff}
</style>
</head>
<body>
<div id="content">
<h2 align="center">商品列表</h2>
<table border="2" cellpadding="5" align="center">
<tr><th>商品編號</th><th>商品名稱</th><th>價格</th><th>剩餘數量</th><th>修改商品</th><th>刪除商品</th></tr>
<?php
foreach ($product as $pid => $pInfo)
    if ($pid == $sel) 
        echo "<tr id=\"sel\"><td>{$pInfo[0]}</td><td>NT\${$pInfo[1]}</td><td>{$pInfo[2]}</td><td>NT\${$pInfo[3]}</td><td><a href=\"reviseProduct.php?pid=$pid\">修改商品資訊</a></td><td><a href=\"reviseProduct.php?pid=$pid\">刪除商品</a></td></tr>\n";
	else 
	    echo "<tr>
		<td>{$pInfo[3]}</td>
		<td>{$pInfo[0]}</td>
		<td>NT\${$pInfo[1]}</td>
		<td>{$pInfo[2]}</td>
		<td><a href=\"reviseProduct.php?pid=$pid\">修改商品資訊</a></td>
		<td><a href=\"deleteGood.php?pid=$pid\">刪除商品</a></td>
		</tr>\n";
?>
</table>
<h3 align="center"><a href="addProduct.php">新增商品</a></h3>
</div>
</body>
</html>
