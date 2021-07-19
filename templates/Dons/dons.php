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
<?php } ?>