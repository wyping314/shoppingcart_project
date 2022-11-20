<?php
$link = mysqli_connect("localhost", "root", "root", "proddb")
  or die ("DB Conneciton Fail!");
mysqli_set_charset($link, 'utf8mb4');
//$seldb = mysql_select_db("proddb")
//  or die("Select DB fail!");
$result = mysqli_query($link, "SELECT * FROM `product`");
while ($row = mysqli_fetch_assoc($result)) {
   $pid = $row['pid'];
   $pName = $row['pName'];
   $price = $row['price'];
   $number = $row['number'];
   $product[$pid] = array($pName, $price, $number,$pid);
}
//mysqli_close($link);
?>
