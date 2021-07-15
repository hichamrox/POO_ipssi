<?php foreach( $animal as $animal):  ?>
    
    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?=$photo.'/'.$animaux->getPhoto() ?>.jpg" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"> Nom : <?= $animaux->getAnimal() ?> </div>
            <div class="infoAnimal">Disponible :  <?php if ($animaux->getDisponibilite() == 1) {echo "oui"; }else{echo"non";} ?> </div>
            <div class="infoAnimal">Arrivé chez nous : <?= $animaux->getDateReception() ?> </div>
            <div class="boutonVoir">
                <a href="./index.php?method=getAnimal&id=<?= $animaux->getId() ?>" >  voir </a>
            </div>
            
            </br>
            
        </div>
    </div>
<?php endforeach ?>