<?php
require_once './model.php';
function main(){
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])){
        $searchEmail = $_POST['email'];
        $user = getUserByEmail($searchEmail);
    }
    include_once './view.php';
}

?>