<?php

namespace App\Domain\OCPWrong;

use App\Domain\OCP\Shape;

class Circle  extends Shape
{
    private $radius;

    public function area() : double
    {
       return $shape->getRadius() * $shape->getRadius() * 3.14;
    }


    /**
     * Get the value of radius
     */ 
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set the value of radius
     *
     * @return  self
     */ 
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }
}