
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
        <div>
            <div class="logo bounce" id="lg"></div>
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
            <nav><a href="">Animaux</a></nav>
            <nav><a href="">Produits</a></nav>
            <nav><a href="">Blog</a></nav>
            <nav><a href="">Dons</a></nav>
            <nav><a href="">Connexion</a></nav>
        </div>
    </header>
    <div id="main">
        <?= var_dump($_SESSION["user"]);?>
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
