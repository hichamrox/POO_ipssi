
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
<?php } ?>