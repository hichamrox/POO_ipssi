<?php foreach( $animaux as $animaux):  ?>
    
    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?='./img/'.$animaux->getPhoto() ?>.jpg" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"> Nom : <?= $animaux->getAnimal() ?> </div>
            <div class="infoAnimal">Disponible :  <?php if ($animaux->getDisponibilite() == 1) {echo "oui"; }else{echo"non";} ?> </div>
            <div class="infoAnimal">Arrivé chez nous : <?= $animaux->getDateReception() ?> </div>
            <div class="boutonVoir">
                <a href="./index.php?page=getAnimal&id=<?= $animaux->getId() ?>" >  voir </a>
            </div>
            <?php if(isset($_SESSION["adminmode"]) && ($_SESSION["adminmode"] == true) ){ ?>
                </br>
                <a href="/public/index.php?page=delAnimal&id=<?= $animaux->getId() ?>">supprimer</a>
                <?php }?>
            
            </br>
            
        </div>
    </div>
<?php endforeach ?>