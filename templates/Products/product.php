<div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?='./img/'.$product->getImage() ?>.jpg" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"><?= $product->getName() ?> </div>
            <div class="infoAnimal"> Description : <?= $product->getDescription() ?> </div>
            <div class="infoAnimal"> Prix : <?= $product->getPrice() ?> </div>
            <div class="boutonAdopter">
                <a id="achat">  Acheter </a>
            </div>
            
            </br>
            
        </div>
    </div>