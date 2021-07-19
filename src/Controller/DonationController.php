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
        try {
            $don = $model->findAll();
        } catch (\Throwable $th) {
            var_dump($th);
        }
        
        $this->render("Dons/dons", [
            "don" => $don
        ]);
    }

}