<?php
include 'temp/bd.php';
$id=$_GET['id_zakaz'];
$sql="UPDATE `zakaz` SET `status`='Взят на прокат' WHERE id_zakaz='$id'";
$res=$mysqli->query($sql);
header('Location: prosmotr_zay.php');
?>