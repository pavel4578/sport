<?php
include 'temp/bd.php';
$fio=$_POST['fio'];
$login=$_POST['login'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql="INSERT INTO `user`(`fio`, `login`, `pass`, `email`, `role`)  VALUES
 ('$fio','$login','$password','$email','Клиент')";
$res=$mysqli->query($sql);
header('Location: formavto.php');
?>