<?php 
require_once "db.php";
extract($_GET);
$sql="SELECT products.Id, products.name,state, prodimages.image, categories.name FROM products inner JOIN prodimages ON products.Id=prodimages.prod_id, categories WHERE products.Id={$id} AND categories.id=products.ctg_id;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>