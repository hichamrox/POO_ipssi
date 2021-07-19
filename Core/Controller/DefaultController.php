<?php
namespace Core\Controller;

class DefaultController {

    /**
     * Affiche la page
     *
     * @param string $path
     * @param array $attributes
     * @return void
     */
    public function render(string $path, array $attributes = [])
    {
        ob_start();
        extract($attributes);
        include ROOT."templates/$path.php";
        $content = ob_get_clean();
        include ROOT."templates/base.php";
    }

    public function redirectToRoute($name, $listParams = array())
    {
        $params = "";
        foreach ($listParams as $key => $value) {
            $params .= "&$key=$value";
        }
        header("Location: public/index.php?page=$name". $params);
    }
}