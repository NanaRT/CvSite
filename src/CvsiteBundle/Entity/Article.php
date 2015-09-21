<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Article
{
    private $id;
    private $titre;
    private $contenu;
    private $date;
    private $category;
    private $image;

    public function getId()
    {
        return $this->id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    public function getTitre()
    {
        return $this->titre;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }
    public function getContenu()
    {
        return $this->contenu;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public function getDate()
    {
        return $this->date;
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

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
}
