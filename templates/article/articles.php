<?php if($_SESSION["adminmode"] == true){ ?>
    <form method="POST" enctype="multipart/form-data"  action="./index.php?page=createArticle" style="margin: auto;display: grid; margin-top: 24px; max-width: 640px;">

        <label for="title">Titre</label>
        <input type="text" name="title" id="title">
  
        <label for="content">Contenu</label>
        <input type="text" name="content" id="content">
  
        <label for="categorieId">Catégorie</label>
        <select name="categorieId" id="categorieId">
            <?php foreach($categories as $categorie): ?>
                <option value="<?= $categorie->getId() ?>"><?= $categorie->getName() ?></option>
            <?php endforeach; ?>
        </select>

        <label for="categorieId">Image</label>
        <input type="file" name="uploaded_file" id="uploaded_file"></input>
  
    <input style="margin: auto;margin-top: 16px; width: 80px;" type="submit" value="Créer">
</form>
<?php }?>

<?php $i = 0; foreach( $articles as $article): $i++; if ($i == 600){break;}?>
    <div class="animal-ct">
        <div class="image-animal-ct">
            <img src="<?php $img=$article->getPicture(); echo "data:image/jpg;base64,".base64_encode($img).""; ?>" class="im-ct" alt="">
        </div>
        <div class="text-animal-ct">
        <?= $article->getContent() ?>
            </br>
            <p>Catégorie : <?= $article->getCategorieId() ?></p>
            </br>
            <a href="/public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a>
            <?php if($_SESSION["adminmode"] == true){ ?>
            </br>
            <a href="/public/index.php?page=delArticle&id=<?= $article->getId() ?>">supprimer</a>
            <?php }?>
        </div>
    </div>
<?php endforeach ?>