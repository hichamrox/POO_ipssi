<?php $i = 0; foreach( $articles as $article): $i++; if ($i == 6){break;}?>
    <div class="animal-ct">
        <div class="image-animal-ct">
            <img src="https://cdn.lelynx.fr/wp-content/uploads/2020/05/GettyImages-1214907564.jpg" alt="">
        </div>
        <div class="text-animal-ct">
        <?= $article->getContent() ?>
            </br>
            <a href="/public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a>
        </div>
    </div>
<?php endforeach ?>