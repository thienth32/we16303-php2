<?php

try{

    if($_GET['number'] < 0){
        throw new Exception("Dữ liệu nhập vào không hợp lệ, Cần nhập số > = 0!");
    }

    
    $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "12345678");
}catch(Exception $ex){
    // send email cho quản trị viên với msg = $ex->getMessage();
    var_dump($ex->getMessage());
    die;
    // header('location: error.php?msg=Đã có lỗi xảy ra, vui lòng liên hệ với quản trị viên');

}


$sql = "select * from users";

echo $sql;


?>