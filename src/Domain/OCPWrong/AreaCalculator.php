<?php

namespace App\Domain\OCPWrong;

use App\Domain\OCPWrong\Rectangule;

class AreaCalculator
{
    public function area(Object $shape)
    {
        if ($shape instanceof Rectangule)
        {
            return $shape->getWidth() + $shape->getHeight();
        }
        return $shape->getRadius() * $shape->getRadius() * 3,14;
    }
}