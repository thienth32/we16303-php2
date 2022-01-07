<?php
require_once './models/User.php';
function home_index(){

    $title = "WE16303 - PHP2";
    $users = getAll();
    include_once "./views/homepage.php";
}

?>