<?php

namespace App\Domain\ISPWrong;

use App\Domain\ISPWrong\Person;

class PersonImp implements Person
{
    
    private $INSSNumber;

    public function getINSSNumber()
    {
        return $this->INSSNumber;
    }

    public function checkSERASA()
    {
        return null;   
    }

}