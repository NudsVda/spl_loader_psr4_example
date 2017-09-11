<?php

include './vendor/autoload.php';


use Nuds\App\Controller\Index;
use Nuds\App\Controller\NotFound;

$path = $_SERVER['PATH_INFO'];


if (!$path)
{
    $index = new Index();
    return $index->run();
}

$routers = [
    '/home' => ['class'=>'Nuds\App\Controller\Home','method'=>'index'],
    '/another' => ['class'=>'Nuds\App\Controller\Another','method'=>'index'],
];

if($routers[$path])
{
    $class = $routers[$path]['class'];
    $method = $routers[$path]['method'];
       
    $class = new $class();
    return $run = $class->$method();
}

return (new NotFound())->run();



