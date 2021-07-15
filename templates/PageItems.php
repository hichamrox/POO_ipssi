<?php
namespace Pb;

class PageItems{
    //header
    public function header(){
        echo '
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
                        <nav><a href="">Animaux</a></nav>
                        <nav><a href="">Produits</a></nav>
                        <nav><a href="">Blog</a></nav>
                        <nav><a href="">Dons</a></nav>
                        <nav><a href="">Connexion</a></nav>
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
            <div id="main">';
    }
    //footer
    public function footer(){
        echo '
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
    ';
    }

}