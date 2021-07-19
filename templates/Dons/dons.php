<<<<<<< HEAD

<h1 style="margin-top: 32px; text-align: center;">Merci d'avance pour vos dons</h1>

<form method="POST" enctype="multipart/form-data"  action="./index.php?page=niceUnDon" style="margin: auto;display: flex; margin-top: 24px; justify-content: center;">
<label for="price">Prix</label>
<input type="text" name="money" id="money" style="margin-left: 16px;">

<input style="margin-left: 16px; width: 80px;" type="submit" value="Donner">
</form>

<div style="margin: auto; margin-top:24px; width : fit content; text-align: center;"><h2>dernière donation : <?= $don[0]->getMoney()?>€ donées le <?= $don[0]->getDonationdate()?></h2></div>

<?php if($_SESSION["adminmode"] == true){?>
    <?php $val = 0; foreach( $dons as $vals):
        $val += $vals->getMoney();
    endforeach ?>
    <div style="margin: auto; margin-top:24px; width : fit content; text-align: center;"><h2>Total : <?= $val ?>€</h2></div>
=======
<h1 class='titreDonation'>DONATION</h1>
<div class="faireDonBlock">
    Faire un don
    <div class="div">
        <input type="text">€
    </div>
    <?php if (isset( $_SESSION ) ){ ?>
        <button> valider </button>

    <?php } else {?>
   <div class="connection">Vous devez être connecter pour faire votre don.</div> 
    <?php } ?>
</div>


<?php
if (isset($_SESSION["adminmode"]) && ($_SESSION["adminmode"] == true) ){
     foreach( $don as $do):  ?>
<div style="margin: auto; margin-top:24px; width : fit content"><?= $do->getMoney()?>€ donnés le <?= $do->getDonationdate()?></div>
<?php endforeach ?>
>>>>>>> 13b1f204086b1cc316e54fefdea938d1b0db3828
<?php } ?>