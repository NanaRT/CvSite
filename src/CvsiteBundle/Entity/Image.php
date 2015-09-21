<?php
namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Image extends UploadedFileEntity
{
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf('Photo N°%s', $this->getId());
    }
}
