<?php
include 'temp/bd.php';
session_start();
$login=$_POST['login'];
$password=$_POST['pass'];
$sql="SELECT * FROM `user` WHERE `login`='$login' and `pass`='$password'";
$res=$mysqli->query($sql);
$user=mysqli_fetch_assoc($res);
if($user){
$_SESSION['id_user']=$user['id_user'];
$_SESSION['fio']=$user['fio'];
$_SESSION['role']=$user['role'];
header('Location: index.php');
}else{
    header('Location: formavto.php?mess=Неверный логин и пароль');
}
?>