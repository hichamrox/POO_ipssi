<?php
namespace App\Controller;

use App\Entity\Article;
use App\Model\ArticleModel;
use App\Model\CategorieModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class ArticleController extends DefaultController {
    

    public function index($data)
    {

        if($_SESSION["adminmode"] == true){
            $categorieModel = new CategorieModel;
            $categories = $categorieModel->findAll();
            $model = new ArticleModel;
            $articles = $model->findAll();
            $this->render("article/articles", [
                "categories" => $categories,
                "articles" => $articles
            ]);
        }else{

            $model = new ArticleModel;
            $articles = $model->findAll();

            $this->render("article/articles", [
                "articles" => $articles
            ]);
        }

    }

    public function single($id)
    {
        if($_SESSION["adminmode"] == true){
            $categorieModel = new CategorieModel;
            $categories = $categorieModel->findAll();
            $model = new ArticleModel;
            $article = $model->find($id);
            $this->render("article/article", [
                "categories" => $categories,
                "article" => $article
            ]);
        }else{
            $model = new ArticleModel;
            $article = $model->find($id);

            $this->render("article/article", [
                "article" => $article
            ]);
        }
    }

    public function deleteArticle($id){
        if($_SESSION["adminmode"] == true){
            $model = new ArticleModel;
            $model->deleteRow($id);
        }
        header('Location: /public/index.php?page=getArticles');
        exit();
    }

    public function create($data){
        if($_SESSION["adminmode"] == true){
            $this->db = new Database;
            if (!empty($data)) {
                $article = new Article($data);

                $imgData = $image = addslashes(file_get_contents($_FILES['uploaded_file']['tmp_name']));

                if (count($_FILES) > 0) {
                    if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
                        $imgData = addslashes(file_get_contents($_FILES['uploaded_file']['tmp_name']));
                        $imageProperties = getimageSize($_FILES['uploaded_file']['tmp_name']);
                    }
                }

                $title = $data['title'];
                $content = $data['content'];
                $cate = $data['categorieId'];
                
                
                $statement = "INSERT INTO article (title, content, categorie_id, picture) VALUES ('$title', '$content', '$cate', '$imgData')";
                
                $prep = $this->db->getPDO()->prepare($statement);
                $prep->bindValue($title, $article->getTitle());
                $prep->bindValue($content, $article->getContent());
                $prep->bindValue($cate, $article->getCategorieId());
                
                $prep->execute();
                
                header('Location: /public/index.php?page=getArticles');
                exit();
            }
        }
    }

    public function update($data, $id){
        if($_SESSION["adminmode"] == true){
            $this->db = new Database;
            if (!empty($data)) {
                $article = new Article($data);

                $title = $data['title'];
                $content = $data['content'];
                $cate = $data['categorieId'];
                
                $statement = "UPDATE article SET title = '$title', content = '$content', categorie_id = '$cate' WHERE id=$id";
                var_dump($statement);
                $prep = $this->db->getPDO()->prepare($statement);
                $prep->bindValue($title, $article->getTitle());
                $prep->bindValue($content, $article->getContent());
                $prep->bindValue($cate, $article->getCategorieId());
                
                $prep->execute();
                
                header('Location: /public/index.php?page=getArticles');
                exit();
            }
        }
    }

}