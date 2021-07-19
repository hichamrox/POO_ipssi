<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Article|array findAll()
 * @method Article find($id)
 */
class ArticleModel extends DefaultModel{

    protected $table = "article";

}