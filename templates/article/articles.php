<?php foreach( $articles as $article): ?>
    <div class="animal-ct">
        <div class="image-animal-ct">
            <img src="https://cdn.lelynx.fr/wp-content/uploads/2020/05/GettyImages-1214907564.jpg" alt="">
        </div>
        <div class="text-animal-ct">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa nulla beatae nemo aut dolores molestias officiis fugiat tempora nostrum consequatur veniam dolor corrupti, qui minima quo aliquid sit. Sed?
            </br>
            <a href="public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a>
        </div>
    </div>
<?php endforeach ?>