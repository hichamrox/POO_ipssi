<?php
namespace App\Controller;

use App\Entity\User;
use App\Model\UserModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class UserController extends DefaultController {


    public function connexionPage(){
    
        $this->render("User/connexion");
        //return $this->redirectToRoute("getArticles");
    }


    public function connect($data)
    {
        $model = new UserModel;
        $user = $model->findUser($data['email']);

        if ($user->getPassword() == $data['pw']){
            session_start();
            $_SESSION["user"] = $user->getRole();
            header('Location: /public/index.php?page=getArticles');
            exit();
        }
        else{
            header('Location: /public/index.php?page=connexionPage');
        }
    }

    public function disconnect()
    {
        unset($_SESSION["user"]);
        header('Location: /public/index.php?page=getArticles');
        exit();
    }

}