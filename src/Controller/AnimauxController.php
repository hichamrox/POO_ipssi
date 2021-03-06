<?php
namespace App\Controller;

use App\Entity\Animaux;
use App\Model\AnimalModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class AnimauxController extends DefaultController {

    public function index()
    {
        $model = new AnimalModel;
        $animaux = $model->findAll();

        $this->render("Animaux/animaux", [
            "animaux" => $animaux
        ]);
    }

    public function single($id)
    {
        $model = new AnimalModel;
        $animal = $model->find($id);

        $this->render("Animaux/animal", [
            "animal" => $animal
        ]);
    }

    public function deleteAnimal($id){
        if($_SESSION["adminmode"] == true){
            $model = new AnimalModel;
            $model->deleteRow($id);
        }
        header('Location: /public/index.php?page=getAnimaux');
        exit();
    }

}