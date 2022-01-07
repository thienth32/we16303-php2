<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    case '/':
        require_once './controllers/HomeController.php';
        home_index();
        break;
    case 'admin':
        echo "Vào trang quarnt trị";
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>