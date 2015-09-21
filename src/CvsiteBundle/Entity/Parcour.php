<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Parcour
{
    private $yearbegin;
    private $yearend;
    private $locality;
    private $category;

    public function setYearbegin($yearbegin)
    {
        $this->yearbegin = $yearbegin;

        return $this;
    }
    public function getYearbegin()
    {
        return $this->yearbegin;
    }
	
    public function setYearend($yearend)
    {
        $this->yearend = $yearend;

        return $this;
    }
    public function getYearend()
    {
        return $this->yearend;
    }

    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }
    public function getLocality()
    {
        return $this->locality;
    }

    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
    public function getCategory()
    {
        return $this->category;
    }
}
