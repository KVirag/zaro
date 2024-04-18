<?php 
require_once "db.php";
$sql="SELECT adress FROM products WHERE 1 group by adress";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>