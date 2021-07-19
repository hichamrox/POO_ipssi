<div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?php $img=$product->getImage(); echo "data:image/jpg;base64,".base64_encode($img).""; ?>" class="im-ct" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"><?= $product->getName() ?> </div>
            <div class="infoAnimal"> Description : <?= $product->getDescription() ?> </div>
            <div class="infoAnimal"> Prix : <?= $product->getPrice() ?> </div>
            <div onclick="addPannier()" class="boutonAdopter" style="width:190px !important;">
                <a id="achat" onclick="addPannier()">  Ajouter au pannier </a>
                
            </div>
            <?php if(isset($_SESSION["adminmode"]) && ($_SESSION["adminmode"] == true) ){  ?>
                </br>
                <a href="/public/index.php?page=delProduct&id=<?= $product->getId() ?>">supprimer</a>
            <?php }?>
            </br>
            
        </div>
    </div>
