<?php
include('sql_check.php');
session_start();
if(empty($_POST['login'])||empty($_POST['password'])){
    $_SESSION['msg']="заполните все поля";
    header('location:index.php');
    die;
}
$login=trim($_POST['login']);
$password=trim($_POST['password']);

if(checkAdmin($login,$password)){
    $_SESSION['admin']=$login;
    if(isset($_POST['check'])){
        setcookie('admin',$login,time()+3600*24*7,'/');
    }
    header('location:../index.php');
    die;
}
$_SESSION['msg']='не правильный пароль или логин';
header('location:index.php');

?>