<?php
namespace Core\Database;

class Database {

    private $host;
    private $dbname;
    private $user;
    private $pwd;
    private $pdo;

    public function __construct()
    {
        try {
            $this->getConfig();
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pwd, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    /**
     * Récupère la configuration de la BDD
     *
     * @return void
     */
    public function getConfig()
    {
        require ROOT. "config/configDb.php";
        foreach ($config as $key => $value) {
            $this->$key = $value;
        };
    }

    /**
     * Retourne la connexion à la BDD
     *
     * @return PDO
     */
    public function getPDO()
    {
        return $this->pdo;
    }

    public function getData (string $statement, $classe, $one = false)
    {
        $query = $this->pdo->query($statement, \PDO::FETCH_CLASS, "App\Entity\\". $classe);

        $data = "";
        if ($one) {
            $data = $query->fetch();
        } else {
            $data = $query->fetchAll();
        }

        return $data;
    }

    public function prepare (string $statement, array $data= array())
    {
        try {
            $prepare = $this->pdo->prepare($statement);

            return $prepare->execute($data);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
       
    }
}