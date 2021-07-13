<?php
namespace App\Manager;

use Core\Database\Database;

/**
 * Class Categorie reprenant tout le CRUD des catégories (Create, Read, Update, Delete)
 */
class CategorieManager {

    private $classe = "Categorie";

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Retourne la liste des catégories
     *
     * @return string
     */
    public function getCategories ()
    {
        $result = $this->db->getData("SELECT * FROM categorie", $this->classe);
        // var_dump($result);
        $content = "<ul>";
        foreach ($result as $value) {
            $content .= "<li><a href='".$value->getId()."'>".$value->getName()."</a></li>";
        }
        $content .= "</ul>";

        return $content;
    }

    /**
     * Retourne une catégorie en fonction de son id
     *
     * @param integer $id
     * @return string
     */
    public function getCategorie (int $id)
    {
        $result = $this->db->getData("SELECT * FROM categorie WHERE id = $id", $this->classe, true);
        if (!$result) {
            $e = new \Exception("Une erreur s'est produite lors de la récupération des données");
            return $e->getMessage();
        } else {
            $content = "<ul>";
            $content .= "<li><a href='$result->id'>$result->name</a></li>";
            $content .= "</ul>";
            
            return $content;
        }
    }

    /**
     * Enregistre une catégorie dans la BDD
     *
     * @return void
     */
    public function saveCategorie ()
    {
        $post = [
            "name" => "catégorie POO"
        ];

        $statement = "INSERT INTO categorie (name) VALUES (:name)";

        $this->db->prepare($statement, $post);
    }

    /**
     * Met à jour une catégorie avec les nouvelles données reçues
     *
     * @param integer $id
     * @return void
     */
    public function updateCategorie (int $id)
    {
        $post = [
            "name" => "catégorie POO mise à jour"
        ];

        $statement = "UPDATE categorie SET name = :name WHERE id = $id";

        $this->db->prepare($statement, $post);
    }

    /**
     * Supprime une catégorie
     *
     * @param integer $id
     * @return void
     */
    public function deleteCategorie (int $id)
    {
        $statement = "DELETE FROM categorie WHERE id= $id";

        $this->db->prepare($statement);
    }
}