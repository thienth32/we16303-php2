<?php
require_once './models/db.php';

function getAllPost(){
    $sql = "select * from posts";
    $connect = getConnect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>