<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_header.css">
    <link rel="stylesheet" href="style/style_home.css">
    <link rel="shortcut icon" href="logos/etrade.jpg" type="image/png">
    <title>E_TRADE</title>
</head>
<body>
<?php
    include('header.php');
    include('main.php');
    if(isset($_SESSION['name'])){
        include('home.php');
        }
         
 
	include('footer.php');
?>