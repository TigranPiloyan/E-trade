<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_TRADE</title>
	<link rel="stylesheet" href="style/style_login.css">
    <link rel="shortcut icon" href="../logos/etrade.jpg" type="image/png">
</head>
<body>

<div class="wrapper">
    <div class="form__body">
    <img src="../logos/etrade.jpg" alt="" width="300px" height="300px">
        <h5>АВТОРИЗАЦИЯ</h5>
        <form action="login.php" method="post">
            <label for="login">
                <input type="text" name="login" placeholder="Логин" id="login" class="login"> 
            </label>
            <label for="password">
                <input type="password" name="password" placeholder="Пароль" id="password" class="pass"> 
            </label>
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo '<p style="color:red">'.$_SESSION['msg'].'</p>';
                            unset($_SESSION['msg']);
                        }
                        if(isset($_COOKIE['admin'])){
                            $_SESSION['admin']=$_COOKIE['admin'];
                            header('location:../index.php');
                        }
                        ?>
            <button type="submit" name="submit" class="button">ВОЙТИ</button>
        </form>
    </div>
</div>
</body>
</html>