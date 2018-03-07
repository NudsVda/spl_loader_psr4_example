<?php

namespace App\Domain\OCPWrong;

class Circle 
{
    private $radius;


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