<?php 
require_once "db.php";
$sql="SELECT Id, name,state,price,descr, mainImg FROM products WHERE Id=4;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>