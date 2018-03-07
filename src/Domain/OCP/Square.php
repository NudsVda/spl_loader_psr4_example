<?php

namespace App\Domain\OCP;

use App\Domain\OCP\Shape;

class Square extends Shape
{
    private $width;    

    public function area() : double
    {
        return $shape->getWidth() + $shape->getHeight();
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
    
}