<?php

class BaseModel{

    function getConnect(){
        $conn = new PDO("mysql:host=127.0.0.1;dbname=we16303-php2;charset=utf8", "root", "12345678");
        return $conn;
    }

    function all(){
        $sql = "select * from " . $this->table;
        $conn = $this->getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $data; 
    }
}

?>