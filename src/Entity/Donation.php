<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Donation extends DefaultEntity  {
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $donationdate;

    /**
     * @var int
     */
    private $money;

    

    public function getId()
    {
        return $this->id;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function getDonationdate()
    {
        return $this->donationdate;
    }


    public function setId($id): self
    {
        return $this->id = $id;

        return $this;
    }

    public function setMoney($money): self
    {
        return $this->money = $money;

        return $this;
    }

    public function setDonationdate($donationdate): self
    {
        return $this->donationdate = $donationdate;

        return $this;
    }
}