<?php
function getConnect(){
    $connect = new PDO("mysql:host=127.0.0.1;dbname=we16303-php2;charset=utf8", "root", "12345678");
    return $connect;
}

?>