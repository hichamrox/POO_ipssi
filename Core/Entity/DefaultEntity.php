<?php
namespace Core\Entity;

class DefaultEntity {


    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }
    
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {

            // On récupère le nom du setter correspondant au champ
            $method = "set".ucfirst($key);
            // Si le setter correspondant exist
            if (method_exists($this, $method)) {
                // On appelle le setter
                $this->$method($value);
            }
        }
    }
}