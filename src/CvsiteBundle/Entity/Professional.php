<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CvsiteBundle\Entity\Parcour;

class Professional extends Parcour
{
    private $id;
    private $typecontract;
    private $name;
	private $company;

    public function getId()
    {
        return $this->id;
    }

    public function setTypecontract($typecontract)
    {
        $this->typecontract = $typecontract;

        return $this;
    }
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }
    public function getCompany()
    {
        return $this->company;
    }
}
