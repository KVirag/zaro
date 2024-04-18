<?php 
require_once "db.php";
extract($_GET);
$sql="SELECT products.Id as psid, products.name as pname, state, categories.name as cname , adress, price, descr, products.timestamp as time,mainImg FROM products, categories WHERE categories.name='{$kat}' AND categories.id=products.ctg_id AND adress LIKE '%{$hely}%' ORDER BY price {$iar}, time {$iido} ;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>