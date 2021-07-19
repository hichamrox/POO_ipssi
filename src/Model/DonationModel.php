<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Donation|array findAll()
 * @method Donation find($id)
 */
class DonationModel extends DefaultModel{

    protected $table = "donations";
}