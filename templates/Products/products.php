<?php foreach( $products as $product):  ?>
    
    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?='./img/'.$product->getImage() ?>.jpg" alt="produit">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"><?= $product->getName() ?> </div>
            <div class="infoAnimal">Description :  <?php if ($product->getDescription() == 1) {echo "oui"; }else{echo"non";} ?> </div>
            <div class="infoAnimal">prix: <?= $product->getPrice() ?> </div>
            <div class="boutonVoir">
                <a href="./index.php?page=getProduct&id=<?= $product->getId() ?>" >  voir </a>
                
            </div>
            <?php if(isset($_SESSION["adminmode"]) && ($_SESSION["adminmode"] == true) ){ ?>
                </br>
                <a href="/public/index.php?page=delProduct&id=<?= $product->getId() ?>">supprimer</a>
                <?php }?>
            
            </br>
            
        </div>
    </div>
<?php endforeach ?>