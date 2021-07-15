<?php
namespace App\Controller;

use App\Entity\Animaux;
use Core\Database\Database;

class AnimauxController {

    private $classe = "Animaux";

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAnimaux ()
    {
        $statement = "SELECT * FROM animaux";
        
        $photo = "./img";
        $animaux = $this->db->getData($statement, $this->classe);

        

        include ROOT."templates/Animaux/animaux.php";
    }

    public function getAnimal(int $id)
    {
        $statement = "SELECT * FROM animaux WHERE id = $id";
        
        $animal = $this->db->getData($statement, $this->classe, true);
        if (!$animal) {
            $e = new \Exception("Une erreur s'est produite lors de la récupération des données");
            return $e->getMessage();
        } else {
           
            include ROOT. "templates/Animaux/animal.php";
        }
    }

}