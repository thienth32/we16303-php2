<?php
require_once './models/Post.php';
require_once './models/User.php';
$postModel = new Post();
$userModel = new User();
$posts = $postModel->all();
$users = $userModel->all();

echo "<pre>";
var_dump($users);
?>