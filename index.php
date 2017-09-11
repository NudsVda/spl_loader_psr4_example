<?php

include __DIR__.'/vendor/autoload.php';

use Nuds\App\Controller\Home;

$home = new Home();

$home->index();