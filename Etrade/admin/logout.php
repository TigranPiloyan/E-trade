<?php
session_start();
$url = "../index.php";
setcookie('admin','',time()-10,"/");
setcookie('user','',time()-10,"/");
session_destroy();
header("location:$url");

