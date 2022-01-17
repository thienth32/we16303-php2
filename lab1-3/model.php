<?php

function getUserByEmail($email){
    $connect = new PDO("mysql:host-127.0.0.1;dbname=lab1;charset=utf8", "root", "12345678");
    $sql = "select * from users where email = '$email'";
    $stmt= $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
}



?>