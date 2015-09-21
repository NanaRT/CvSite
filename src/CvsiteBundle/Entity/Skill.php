<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Skill
{
    private $id;
    private $name;
    private $category;
    private $image;

    public function getId()
    {
        return $this->id;
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
