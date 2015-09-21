<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CvsiteBundle\Entity\Parcour;

class Education extends Parcour
{
    private $id;
    private $formationcenter;
    private $level;
    private $diploma;
    private $mention;

    public function getId()
    {
        return $this->id;
    }

    public function setFormationcenter($formationcenter)
    {
        $this->formationcenter = $formationcenter;

        return $this;
    }
    public function getFormationcenter()
    {
        return $this->formationcenter;
    }

    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }
    public function getLevel()
    {
        return $this->level;
    }

    public function setDiploma($diploma)
    {
        $this->diploma = $diploma;

        return $this;
    }
    public function getDiploma()
    {
        return $this->diploma;
    }

    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }
    public function getMention()
    {
        return $this->mention;
    }
}
