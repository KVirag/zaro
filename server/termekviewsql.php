<?php 
require_once "db.php";
extract($_GET);
$sql="SELECT products.Id as psid,prodimages.id as piid, products.name as pname, state, prodimages.image as imgs, categories.name as cname , adress, other, price, descr, products.timestamp as time FROM products inner JOIN prodimages ON products.Id=prodimages.prod_id, categories WHERE products.Id={$id} AND categories.id=products.ctg_id;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>