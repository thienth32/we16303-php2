<?php

use App\Controllers\LoginController;
use App\Controllers\SubjectController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url){
    $router = new RouteCollector();

    $router->filter('check-login', function(){
        if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
            header('location: '. BASE_URL . 'login');
            die;
        }
    });

    // định nghĩa url trong này

    $router->get('login', [LoginController::class, 'loginForm']);
    $router->post('login', [LoginController::class, 'postLogin']);
    $router->any('logout', function (){
        unset($_SESSION['auth']);
        header('location: ' . BASE_URL . 'login');
        die;
    });


    $router->group(['prefix' => 'mon-hoc'], function($router){
        $router->get('/', [SubjectController::class, 'index'], ['before' => 'check-login']);
        $router->get('tao-moi', [SubjectController::class, 'addForm']);
        $router->post('tao-moi', [SubjectController::class, 'saveAdd']);
        $router->get('cap-nhat/{id}', [SubjectController::class, 'editForm']);
        $router->post('cap-nhat/{id}', [SubjectController::class, 'saveEdit']);
        $router->get('{subjectId}/cap-nhat', 
            [SubjectController::class, 'editForm']);
        $router->get('xoa/{id}', [SubjectController::class, 'remove']);
        // tham số {}
        // 2 loại 
        // - tham số bắt buộc : {id}
        // - tham số tuỳ chọn : {id}?
        // $router->get('cap-nhat/{id}/{name}?', [SubjectController::class, 'editForm']);
    });
    



    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
    // Print out the value returned from the dispatched function
    echo $response;
}

?>