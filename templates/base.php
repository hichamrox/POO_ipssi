
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/ico.png"/>
    <title>myAnimals</title>
    <link rel="stylesheet" href="includes/main.css">
</head>
<body>
    <header>
    <div style="position: absolute;width: 34px;height: 34px;right: 8px;top: 86px;background-image: url(../public/img/panier.png);background-size: cover;cursor: pointer;"></div>
        <div style="position: absolute;width: 22px;height: 22px;right: 13px;display: flex;top: 100px;justify-content: center;font-size: 16px;font-weight: bold;cursor: pointer;"><p><?=$_SESSION["totalpannier"]?></p></div>
        <div>
            <div class="logo bounce <?php if($_SESSION["adminmode"]){echo "adminlg";} ?>" id="lg"></div>
            <div class="menu" id="mn">
                <nav><a href="index.php?page=getAnimaux">Animaux</a></nav>
                <nav><a href="index.php?page=getProducts">Produits</a></nav>
                <nav><a href="index.php?page=getArticles">Blog</a></nav>
                <nav><a href="index.php?page=getDons">Dons</a></nav>
                <nav><a href="<?php if(!isset($_SESSION["user"])){ echo "index.php?page=connexionPage"; } else {echo "index.php?page=deconnexion";}?>">
                    <?php if(!isset($_SESSION["user"])){ echo "Connexion"; } else {echo "Deconnexion";}?></a></nav>
            </div>
            <!--Hamburger menu-->
            <div class="nav-toggle">
                <div class="nav-toggle-bar"></div>
            </div>            
        </div>
        <div id="hm-menu">
            <nav><a href="index.php?page=getAnimaux">Animaux</a></nav>
            <nav><a href="index.php?page=getProducts">Produits</a></nav>
            <nav><a href="index.php?page=getArticles">Blog</a></nav>
            <nav><a href="index.php?page=getDons">Dons</a></nav>
            <nav><a href="<?php if(!isset($_SESSION["user"])){ echo "index.php?page=connexionPage"; } else {echo "index.php?page=deconnexion";}?>">
            <?php if(!isset($_SESSION["user"])){ echo "Connexion"; } else {echo "Deconnexion";}?></a></nav>
        </div>
    </header>
    <div id="main">
    <?= $content ?>
    </div>
        <footer id="footer">
            <div>
                <div>
                    <a href=""><img height="16" width="16" src="img/hammer.png" alt="rights"> Mentions Légales</a>
                    <a href=""><img height="16" width="16" src="img/ig.png" alt="insta logo"> Instagram</a>
                    <a href=""><img height="16" width="16" src="img/tw.png" alt="twitter logo"> Twitter</a>
                </div>
            </div>
            <div>
                <p>© Copyright - myAnimals, 2021 - All rights reserved.</p>
            </div>
        </footer>
    </body>
    <script src="includes/main.js"></script>
    </html>
