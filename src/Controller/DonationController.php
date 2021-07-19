<?php
namespace App\Controller;

use App\Entity\Donation;
use App\Model\DonationModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class DonationController extends DefaultController {


    public function index()
    {
<<<<<<< HEAD
        if($_SESSION["adminmode"] == true){
            $model = new DonationModel;
            $don = $model->findLast();
            $dons = $model->findAll();

            $this->render("Dons/dons", [
                "don" => $don,
                "dons" => $dons
            ]);
        }else{
            $model = new DonationModel;
            $don = $model->findLast();
            $this->render("Dons/dons", [
                "don" => $don
            ]);
        }
    }

    public function create($data){

        $this->db = new Database;
        if (!empty($data)) {
            $donation = new Donation($data);

            $price = $data['money'];
            $date = date('Y-m-d H:i:s');
            
            
            $statement = "INSERT INTO donation (donationdate, money) VALUES ('$date', '$price')";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue($price, $donation->getMoney());
            $prep->bindValue($date, $donation->getDonationdate());
            
            $prep->execute();
            
            header('Location: /public/index.php?page=getDons');
            exit();
        }
=======
        $model = new DonationModel;

            $don = $model->findAll();
>>>>>>> 13b1f204086b1cc316e54fefdea938d1b0db3828
        
    }

   

}