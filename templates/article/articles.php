<?php if($_SESSION["adminmode"] == true){ ?>
<form method="POST" action="./index.php?page=createArticle" style="margin: auto;display: grid; margin-top: 24px; max-width: 640px;">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="content">Contenu</label>
    <input type="text-area" name="content" id="content">
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <input style="margin: auto;margin-top: 16px; width: 80px;" type="submit" value="Créer">
</form>
<?php }?>

<?php $i = 0; foreach( $articles as $article): $i++; if ($i == 600){break;}?>
    <div class="animal-ct">
        <div class="image-animal-ct">
            <img src="https://cdn.lelynx.fr/wp-content/uploads/2020/05/GettyImages-1214907564.jpg" alt="">
        </div>
        <div class="text-animal-ct">
        <?= $article->getContent() ?>
            </br>
            <a href="/public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a>
            <?php if($_SESSION["adminmode"] == true){ ?>
            </br>
            <a href="/public/index.php?page=delArticle&id=<?= $article->getId() ?>">supprimer</a>
            <?php }?>
        </div>
    </div>
<?php endforeach ?>