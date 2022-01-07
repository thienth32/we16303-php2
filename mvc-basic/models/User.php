<?php
require_once './models/db.php';

function getAll(){
    $sql = "select * from users";
    $connect = getConnect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>