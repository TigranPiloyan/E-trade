<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_header.css">
    <link rel="stylesheet" href="../style/style_main.css">
    <link rel="shortcut icon" href="../logos/etrade.jpg" type="image/png">
    <title>E-TRADE</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <?php
        if(isset($_SESSION['name'])){
         echo '<div class="parent">
                <div class="cat1">
                        <ul class="list_cat"></ul>
                </div>
                <div class="cat">
                        <ul class="list_pod_cat"></ul>
                </div>
                <div class="list">
                </div>
        </div>';}else{
                include('start_page.php');
        }
?>
<script src="../javascript/jquery-3.5.1.min.js"></script> 
<script src="../javascript/category.js"></script>  
</body>
</html>