    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="https://cdn.lelynx.fr/wp-content/uploads/2020/05/GettyImages-1214907564.jpg" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"> <h1><?= $article->getTitle() ?> </h1> </div>
            <div class="infoAnimal"><?= $article->getContent() ?> </div>
            
            </br>
            <?php if(isset($_SESSION) && ($_SESSION["adminmode"]) == true){ ?>
            <a href="/public/index.php?page=delArticle&id=<?= $article->getId() ?>">supprimer</a>
            <?php }?>
            
        </div>
    </div>
