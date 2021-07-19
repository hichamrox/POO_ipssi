<?php
namespace App\Controller;

use App\Entity\Donation;
use App\Model\DonationModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class DonationController extends DefaultController {


    public function index()
    {
        $model = new DonationModel;
        $don = $model->findAll();

        $this->render("Dons/dons", [
            "don" => $don
        ]);
    }

}