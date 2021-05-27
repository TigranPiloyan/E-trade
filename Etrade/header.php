<header>
        <div class="logo">
            <img src="logos/etrade.png" alt="">
        </div>
        <div class="about">
        <?php
            session_start();
            if(isset($_SESSION['name'])){
            echo "  <div class='home'>
                        <a href='index.php'>Домой</a>
                    </div>
                    <div class='contact'>
                        <a href='php/contacts.php'>Котакты</a>
                    </div>
                    <div class='category'>
                        <a href='php/category.php'>Категории</a>
                    </div>";   
                }else{
                    echo' <i><h2>Склад и торговая точка</h2></i>';
                }
                 
            ?>
        </div>
        <div class="login">
            <?php
                if(isset($_SESSION['name'])){
                    echo"<div class='logout'>";
                        echo "<div class='admin_logo'>";
                            echo "<img src='logos/user.svg' class='user_img'>";
                            echo "<p class='login_name'>".$_SESSION['name']."</p>";
                        echo "</div>";
                        echo '<a href="admin/logout.php"><button class="butlogout">Выход</button></a>';
                    echo"</div>";    
                }else{
                    echo'<a href="admin/index.php"><button class="butlog butlogout">Вход</button></a> ';        
                }
                 
            ?>
        </div> 

       
</header>