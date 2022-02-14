<?php

use App\Controllers\LoginController;
use App\Controllers\SubjectController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url){
    $router = new RouteCollector();

    // định nghĩa url trong này
    $router->get('/', function(){
        return "Hello poly";
    });

    $router->get('login', [LoginController::class, 'loginForm']);
    $router->post('login', [LoginController::class, 'postLogin']);

    // cập nhật thông tin một môn học
    // mon-hoc/cap-nhat?id=1 => query string
    // mon-hoc/1/cap-nhat => route parameter - tham số đường dẫn
    $router->get('mon-hoc/{subjectId}/cap-nhat', 
            [SubjectController::class, 'editForm']);



    // request dạng get url: localhost/we16303-php2/asm1/subjects
    // sẽ đc xử lý tại SubjectController->index();

    $router->group(['prefix' => 'mon-hoc'], function($router){
        $router->get('/', [SubjectController::class, 'index']);
        $router->get('tao-moi', [SubjectController::class, 'addForm']);
        $router->post('tao-moi', [SubjectController::class, 'saveAdd']);
        // tham số {}
        // 2 loại 
        // - tham số bắt buộc : {id}
        // - tham số tuỳ chọn : {id}?
        $router->get('cap-nhat/{id}/{name}?', [SubjectController::class, 'editForm']);
    });
    



    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    
    // Print out the value returned from the dispatched function
    echo $response;
}

?>