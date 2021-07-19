<?php if($_SESSION["adminmode"] == true){ ?>
    <form method="POST" enctype="multipart/form-data"  action="./index.php?page=createProduct" style="margin: auto;display: grid; margin-top: 24px; max-width: 640px;">

        <label for="title">Nom</label>
        <input type="text" name="name" id="name">
  
        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="price">Prix</label>
        <input type="text" name="price" id="price">

        <label for="categorieId">Image</label>
        <input type="file" name="uploaded_file" id="uploaded_file"></input>
  
    <input style="margin: auto;margin-top: 16px; width: 80px;" type="submit" value="Créer">
</form>
<?php }?>

<?php foreach( $products as $product):  ?>
    
    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?php $img=$product->getImage(); echo "data:image/jpg;base64,".base64_encode($img).""; ?>" class="im-ct" alt="produit">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"><?= $product->getName() ?> </div>
            <div class="infoAnimal">Description :  <?php if ($product->getDescription() == 1) {echo "oui"; }else{echo"non";} ?> </div>
            <div class="infoAnimal">prix: <?= $product->getPrice() ?> </div>
            <div class="boutonVoir">
                <a href="./index.php?page=getProduct&id=<?= $product->getId() ?>" >  voir </a>
                
            </div>
            <?php if($_SESSION["adminmode"] == true){ ?>
                </br>
                <a href="/public/index.php?page=delProduct&id=<?= $product->getId() ?>">supprimer</a>
                <?php }?>
            
            </br>
            
        </div>
    </div>
<?php endforeach ?>