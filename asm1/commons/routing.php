<?php

use App\Controllers\LoginController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url){
    $router = new RouteCollector();

    $router->get('login', [LoginController::class, 'loginForm']);
    $router->post('login', [LoginController::class, 'postLogin']);
    $router->any('logout', function (){
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL . 'login');
        die;
    });

    $router->filter('check-login', function(){
        if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH])){
            header('location: '. BASE_URL . 'login');
            die;
        }
    });

    // định nghĩa url trong này

    $router->group(['prefix' => 'admin', 'before' => 'check-login'], function($router){
        $router->group(['prefix' => 'mon-hoc'], function($router){
            $router->get('/', [SubjectController::class, 'index']);
            $router->get('tao-moi', [SubjectController::class, 'addForm']);
            $router->post('tao-moi', [SubjectController::class, 'saveAdd']);
            $router->get('cap-nhat/{id}', [SubjectController::class, 'editForm']);
            $router->post('cap-nhat/{id}', [SubjectController::class, 'saveEdit']);
            $router->get('xoa/{id}', [SubjectController::class, 'remove']);
        });
        $router->group(['prefix' => 'quiz'], function($router){
            $router->get('/', [QuizController::class, 'index']);
            // $router->get('tao-moi', [SubjectController::class, 'addForm']);
            // $router->post('tao-moi', [SubjectController::class, 'saveAdd']);
            // $router->get('cap-nhat/{id}', [SubjectController::class, 'editForm']);
            // $router->post('cap-nhat/{id}', [SubjectController::class, 'saveEdit']);
            // $router->get('xoa/{id}', [SubjectController::class, 'remove']);
        });
    });  


    
    



    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
    // Print out the value returned from the dispatched function
    echo $response;
}

?>