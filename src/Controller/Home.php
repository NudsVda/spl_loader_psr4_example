<?php

namespace Nuds\App\Controller;

use Nuds\App\Model\Pessoa;

class Home 
{

    public function index()
    {
       $pessoas = (new Pessoa())->getAll();       
       return include ('./view/index.php');
    }


}