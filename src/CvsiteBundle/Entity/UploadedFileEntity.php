<?php

namespace CvsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * UploadedFileEntity
 */
class UploadedFileEntity
{
    protected $filePath;
    protected $fileName;
    protected $file;
    protected $uploadPath;

    public function __construct($uploadDirPath = null)
    {
        $this->uploadPath = $uploadDirPath;
    }

    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }
    public function getFilePath()
    {
        return $this->filePath;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }
    public function getFileName()
    {
        return $this->fileName;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = $uploadPath;
        return $this;
    }
    public function getUploadPath()
    {
        if($this->uploadPath == null)
        {
            $this->uploadPath = pathinfo($this->filePath, PATHINFO_DIRNAME);
        }
        return $this->uploadPath;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
    public function getFile()
    {
        return $this->file;
    }
}
