<?php
namespace App\Controller;

use App\Entity\Article;
use App\Model\ArticleModel;
use App\Model\CategorieModel;
use App\Model\UserModel;
use Core\Controller\DefaultController;

class ArticleController extends DefaultController {
    

    public function index()
    {
        $model = new ArticleModel;
        $articles = $model->findAll();

        $this->render("article/articles", [
            "articles" => $articles
        ]);
    }

    public function single($id)
    {
        $model = new ArticleModel;
        $article = $model->find($id);

        $this->render("article/article", [
            "article" => $article
        ]);
    }

    public function create($data)
    {
        if (!empty($data)) {
            $article = new Article($data);
            
            $statement = "INSERT INTO article (title, content, categorie_id, user_id, picture) VALUES (:title, :content, :categorie_id, :user_id, :picture)";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':title', $article->getTitle());
            $prep->bindValue(':content', $article->getContent());
            $prep->bindValue(':categorie_id', $article->getCategorieId());
            $prep->bindValue(':user_id', $article->getUserId());
            $prep->bindValue(':picture', $article->getPicture());
            
            $prep->execute();
            
            return $this->redirectToRoute("getArticles");
        } else {
            $categorieModel = new CategorieModel;
            $categories = $categorieModel->findAll();
            $userModel = new UserModel;
            $users = $userModel->findAll();
            $this->render("article/create", [
                "categories" => $categories,
                "users" => $users
            ]);
        }
    }

}