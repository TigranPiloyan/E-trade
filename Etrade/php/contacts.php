<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_header.css">
    <link rel="stylesheet" href="../style/style_contacts.css">
    <link rel="shortcut icon" href="../logos/etrade.jpg" type="image/png">
    <title>E-TRADE</title>
</head>
<body>
    <?php
    include('header.php');
    if(isset($_SESSION['name'])){
        echo '<div class="conect">
                <div class="con_cat">
                    <ul class="list_con_cat"></ul>
                </div>
                <div class="con">
                    <ul class="list_con"></ul>
                </div>
            </div>';
    }
    ?>
<script src="../javascript/jquery-3.5.1.min.js"></script> 
<script src="../javascript/contacts.js"></script>  
</body>
</html>