<?php

use App\Domain\ISPWrong\Person;

class Client implements Person
{

    private $cpf;
    
    public function getINSSNumber()
    {
        return null;
    }

    public function checkSERASA()
    {
        $serasaService = new SerasaService();
        return $serasaService->check($cpf);   
    }

}