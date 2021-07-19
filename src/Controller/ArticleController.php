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

    public function deleteArticle($id){
        if($_SESSION["adminmode"] == true){
            $model = new ArticleModel;
            $model->deleteRow($id);
        }
        header('Location: /public/index.php?page=getArticles');
        exit();
    }

    

    public function create($data)
    {
        if (!empty($data)) {
            $article = new Article($data);
            
            $statement = "INSERT INTO article (title, content ) VALUES (:title, :content)";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':title', $article->getTitle());
            $prep->bindValue(':content', $article->getContent());
            //$prep->bindValue(':picture', $article->getPicture());
            
            $prep->execute();
            
            header('Location: /public/index.php?page=getArticles');
            exit();
        } else {
            header('Location: /public/index.php?page=getArticles');
            exit();
        }
    }


}