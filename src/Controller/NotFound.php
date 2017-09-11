<?php

namespace Nuds\App\Controller;

class NotFound
{

    public function run()
    {       
       return include ('./view/notfound.php');
    }


}