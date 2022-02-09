<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url){
    $router = new RouteCollector();

    // định nghĩa url trong này
    $router->get('/', function(){
        return "Hello poly";
    });


    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
    // Print out the value returned from the dispatched function
    echo $response;
}

?>