<?php

spl_autoload_register(function($class){
    require_once "./" . strtolower(str_replace("\\", "/", $class)) . ".php";
});

use Controllers\HomeController;
use Controllers\UserController;
use Models\Order;
use Models\Product;
use Models\User;

$x = new HomeController();
$y = new UserController();
$z = new User();
$w = new Product();


var_dump($x, $y, $z, $w);
// echo $x->a = 'test';

?>