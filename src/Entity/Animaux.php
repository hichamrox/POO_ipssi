<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Animaux extends DefaultEntity{

    /**
     * @var int
     */
    private $id;

    /**
     * @var varchar
     */
    private $animal;

    /**
     * @var tinyint
     */
    private $disponibilite;

    /**
     * @var varchar
     */
    private $date_reception;

    /**
     * @var varchar
     */
    private $photo;

      /**
     * @var varchar
     */
    private $race;

    /**
     * 
     * @var varchar
     */
    private $age;
     /**
     * @var varchar
     */
    private $poids;
   
   

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     */
    public function setAnimal($animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get the value of disponibilite
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set the value of disponibilite
     */
    public function setDisponibilite($disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get the value of date_reception
     */
    public function getDateReception()
    {
        return $this->date_reception;
    }

    /**
     * Set the value of date_reception
     */
    public function setDateReception($date_reception): self
    {
        $this->date_reception = $date_reception;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of poids
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     */
    public function setPoids($poids): self
    {
        $this->poids = $poids;

        return $this;
    }
}