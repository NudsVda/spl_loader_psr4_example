<?php

namespace App\Domain\ISP;

use App\Domain\ISP\Client;

class ClientImp implements Client
{

    private $cpf;

    public function checkSERASA()
    {
        $serasaService = new SerasaService();
        return $serasaService->check($cpf);   
    }

}