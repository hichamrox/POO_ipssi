    <div class="animal-ct center">
        <div class="image-animal-ct">
            <img src="<?='./img/'.$animal->getPhoto() ?>.jpg" alt="Animal">
            </a>
        </div>
        <div class="text-animal-ct textAnimaux">
            <div class="infoAnimal"> Race : <?= $animal->getRace() ?> </div>
            <div class="infoAnimal"> Nom : <?= $animal->getAnimal() ?> </div>
            <div class="infoAnimal"> Age : <?= $animal->getAge() ?> </div>
            <div class="infoAnimal"> Poids : <?= $animal->getPoids() ?> </div>
            <div class="infoAnimal">Disponible :  <?php if ($animal->getDisponibilite() == 1) {echo "oui"; }else{echo"non";} ?> </div>
            <div class="infoAnimal">Arrivé chez nous : <?= $animal->getDateReception() ?> </div>

            <div class="boutonAdopter">
                <a id="adoption" href="./index.php?page=getAnimal&id=<?= $animal->getId() ?>" >  Adopter </a>
            </div>
            <?php if($_SESSION["adminmode"] == true){ ?>
                </br>
                <a href="/public/index.php?page=delAnimal&id=<?= $animal->getId() ?>">supprimer</a>
                <?php }?>
            
            </br>
            
        </div>
    </div>
