<?php

namespace Nuds\App\Model;

class Pessoa
{

    /**
    * Este não seria exatamente o lugar para estar isso, mas é só para fins instrucionais
    */
    public function getAll() : array
    {
        return [
            ['nome'=>José,'idade'=>20],
            ['nome'=>Pedrinho,'idade'=>12]
        ];
    }
    

}