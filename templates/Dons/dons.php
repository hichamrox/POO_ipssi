<?php foreach( $don as $do):  ?>
<div style="margin: auto; margin-top:24px; width : fit content"><?= $do->getMoney()?> donées le <?= $do->getDonationdate()?></div>
<?php endforeach ?>