<?php

use App\Controllers\SubjectController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url){
    $router = new RouteCollector();

    // định nghĩa url trong này
    $router->get('/', function(){
        return "Hello poly";
    });

    // request dạng get url: localhost/we16303-php2/asm1/subjects
    // sẽ đc xử lý tại SubjectController->index();

    $router->get('mon-hoc', [SubjectController::class, 'index']);
    $router->get('mon-hoc/tao-moi', [SubjectController::class, 'addForm']);
    $router->post('mon-hoc/tao-moi', [SubjectController::class, 'saveAdd']);



    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
    // Print out the value returned from the dispatched function
    echo $response;
}

?>