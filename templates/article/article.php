<?php if($_SESSION["adminmode"] == true){ ?>
    <form method="POST" action="./index.php?page=updateArticle&id=<?= $article->getId() ?>" style="margin: auto;display: grid; margin-top: 24px; max-width: 640px;">

        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?= $article->getTitle() ?>">
  
        <label for="content">Contenu</label>
        <input type="text" name="content" id="content" value="<?= $article->getContent() ?>">
  
        <label for="categorieId">Catégorie</label>
        <select name="categorieId" id="categorieId">
            <?php foreach($categories as $categorie): ?>
                <option selected="selected"><?= $article->getCategorieId() ?></option>
                <option value="<?= $categorie->getId() ?>"><?= $categorie->getName() ?></option>
            <?php endforeach; ?>
        </select>
  
    <input style="margin: auto;margin-top: 16px; width: 80px;" type="submit" value="Modifier">
</form>
<?php }?>
    
    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?php $img=$article->getPicture(); echo "data:image/jpg;base64,".base64_encode($img).""; ?>" class="im-ct" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"> <h1><?= $article->getTitle() ?> </h1> </div>
            <div class="infoAnimal"><?= $article->getContent() ?> </div>
            <div class="infoAnimal">Catégorie : <?= $article->getCategorieId() ?> </div>
            
            </br>
            <?php if(isset($_SESSION) && ($_SESSION["adminmode"]) == true){ ?>
            <a href="/public/index.php?page=delArticle&id=<?= $article->getId() ?>">supprimer</a>
            <?php }?>
            
        </div>
    </div>
