<?php 
require_once "db.php";
$sql="SELECT name FROM categories WHERE 1";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>