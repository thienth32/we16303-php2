<?php
require_once './models/User.php';
require_once './models/Post.php';
function home_index(){

    $title = "WE16303 - PHP2";
    $users = getAll();
    $posts = getAllPost();
    include_once "./views/homepage.php";
}

?>