<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    case '/':
        require_once './controllers.php';
        main();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>