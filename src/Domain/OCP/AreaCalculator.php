<?php

namespace App\Domain\OCP;

use App\Domain\OCP\Shape;

class AreaCalculator
{
    public function area(Shape $shape)
    {
        return $shape->area();
    }
}