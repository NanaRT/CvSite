<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Category
{
    private $id;
    private $nom;
	private $mothercat;
	
    public function getId()
    {
        return $this->id;
    }
	
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getNom()
    {
        return $this->nom;
    }
	
    public function setMothercat($mothercat)
    {
        $this->mothercat = $mothercat;

        return $this;
    }
    public function getMothercat()
    {
        return $this->mothercat;
    }
}
