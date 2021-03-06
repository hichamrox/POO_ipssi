<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel {

    protected $table;
    protected $className ="";

    public function __construct()
    {
        $this->db = new Database;
        $this->className = ucfirst($this->table);
    }

    public function findAll()
    {
        $statement = "SELECT * FROM $this->table";
        return $this->db->getData($statement, $this->className);
    }

    public function find($id)
    {
        $statement = "SELECT * FROM $this->table WHERE id = $id";
        return $this->db->getData($statement, $this->className, true);
    }

    public function findUser($email)
    {
        $statement = "SELECT * FROM $this->table WHERE email = '$email'";
        return $this->db->getData($statement, $this->className, true);
    }

    public function findLast()
    {
        $statement = "SELECT * FROM $this->table ORDER BY id DESC LIMIT 1";
        return $this->db->getData($statement, $this->className);
    }

    public function deleteRow($id){
        if($_SESSION["adminmode"] == true){
            $statement = "DELETE FROM $this->table WHERE id = $id";
            return $this->db->prepare($statement);
        }
    }

    public function specialquery($statement){
        if($_SESSION["adminmode"] == true){
            return $this->db->prepare($statement);
        }
    }


}