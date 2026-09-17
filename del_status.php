<?php
include 'temp/bd.php';
$id=$_GET['id_zakaz'];
$sql="DELETE FROM `zakaz` WHERE id_zakaz = $id";
$res=$mysqli->query($sql);
header('Location: lich_kab.php');
?>