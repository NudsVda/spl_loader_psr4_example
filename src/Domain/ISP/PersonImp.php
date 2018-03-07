<?php

namespace App\Domain\ISP;

use App\Domain\ISP\Person;

class PersonImp implements Person
{
    
    private $INSSNumber;

    public function getINSSNumber()
    {
        return $this->INSSNumber;
    }
   

}