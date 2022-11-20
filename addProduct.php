<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改商品</title>
</head>
<body>
<form id="update" name="update" method="post" action="">
    <table width="350" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
        <tr>
            <div class="content">
                <td colspan="2" align="center" bgcolor="#BFC6D9"><font color="#000000">商品資料修改</font></td>
        </tr>
        <tr>
            <td width="100" align="center" valign="baseline">商品編號</td>
            <td valign="baseline">
                <input type="text" name="pid" id="pid"></td>
        </tr>
        <tr>
            <td width="100" align="center" valign="baseline">商品名稱</td>
            <td valign="baseline">
                <input type="text" name="pName" id="pName"></td>
        </tr>
        <tr>
            <td width="100" align="center" valign="baseline">商品價格</td>
            <td valign="baseline">
                <input type="text" name="price" id="price"></td>
        </tr>
        <tr>
            <td width="100" align="center" valign="baseline">剩餘數量</td>
            <td valign="baseline">
                <input type="text" name="number" id="number"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" bgcolor="#BFC6D9">
                <input type="hidden" name="action" value="store">
                <input type="submit" name="button" id="button" value="修改">
            </td>
        </tr>
    <tr>
        <td colspan="2" align="center" bgcolor="#ffffff">
    <a href = manange.php>商品列表</a>
    </td>
    </tr>
  </table>
</form>
<div id=result>
<?php
session_start();
if (isset($_POST['pid'])) {
    if ($_POST['pName'] != "" && $_POST['price'] != "" && $_POST['number'] != "") {//不能為空
        require('product.php');//跟include用法差不多
        $query = "INSERT INTO `product`(`pid`,`pName`,`price`,`number`) VALUES('" . $_POST['pid'] . "' ,'"  . $_POST['pName'] . "' ,'" . $_POST['price'] . "' ,'" . $_POST['number'] ."')";
        $result = mysqli_query($link, $query);
        header("Refresh:0; url = manange.php");
    }
    else {
        echo '輸入有誤';
    }
}

?>
</div>
</body>
</html>
