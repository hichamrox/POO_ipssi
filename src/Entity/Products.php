<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Products extends DefaultEntity  {
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $price;

    

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setId($id): self
    {
        return $this->id = $id;

        return $this;
    }

    public function setName($name): self
    {
        return $this->name = $name;

        return $this;
    }

    public function setImage($image): self
    {
        return $this->image = $image;

        return $this;
    }

    public function setDescription($description): self
    {
        return $this->description = $description;

        return $this;
    }

    public function setPrice($price): self
    {
        return $this->price = $price;

        return $this;
    }
}