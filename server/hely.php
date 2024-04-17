<?php 
require_once "db.php";
$sql="SELECT state FROM products WHERE 1";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>