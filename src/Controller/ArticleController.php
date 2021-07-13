<?php
namespace App\Manager;

use Core\Database\Database;

class ArticleManager {

    private $classe = "Article";

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getArticles ()
    {
        $statement = "SELECT * FROM article";
        $result = $this->db->getData($statement, $this->classe);

        $content = "<ul>";
        foreach ($result as $value) {
            $content .= "<li><a href='$value->id'>$value->name</a></li>";
        }
        $content .= "</ul>";

        return $content;
    }

    public function getArticle(int $id)
    {
        $statement = "SELECT * FROM article WHERE id = $id";

        $result = $this->db->getData($statement, $this->classe, true);
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

    public function saveArticle ()
    {
        $post = [
            "title" => "Lorem Ipseum Dolor Sit Amet",
            "content" => "Lorem Ipseum Dolor Sit Amet Consecitur Lorem Ipseum Dolor Sit Amet",
            "categorie_id" => 35,
            "user_id" => 2
        ];

        $statement = "INSERT INTO article (title, content, categorie_id, user_id) VALUES (:title, :content, :categorie_id, :user_id)";

        $this->db->prepare($statement, $post);
    }

    public function updateArticle (int $id)
    {
        $post = [
            "title" => "Lorem Ipseum Dolor Sit Amet",
            "content" => "Lorem Ipseum Dolor Sit Amet Consecitur Lorem Ipseum Dolor Sit Amet",
            "categorie_id" => 35,
            "user_id" => 2
        ];

        $statement = "UPDATE article SET (
            title= :title,
            content= :content,
            categorie_id= :categorie_id,
            user_id = :user_id
            WHERE id = $id
        )";

        $this->db->prepare($statement, $post);
    }

    public function delete(int $id)
    {
        $statement = "DELETE FROM article WHERE id = $id";

        $this->db->prepare($statement);
    }
}