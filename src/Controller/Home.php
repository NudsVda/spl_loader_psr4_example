<?php

namespace Nuds\App\Controller;

use Nuds\App\Model\Person;

class Home 
{

    public function index()
    {
       $people = (new Person())->getAll();       
       return include ('./view/people.php');
    }


}