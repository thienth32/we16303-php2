<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    case 'login':
        break;
    case 'dashboard':
        break;
    case 'mon-hoc':
        break;
    case 'mon-hoc/tao-moi':
        break;
    case 'mon-hoc/luu-tao-moi':
        break;
    case 'mon-hoc/cap-nhat':
        break;
    case 'mon-hoc/luu-cap-nhat':
        break;
    case 'mon-hoc/xoa':
        break;
    case 'mon-hoc/chi-tiet':
        break;
    case 'quiz':
        break;
    case 'quiz/tao-moi':
        break;
    case 'quiz/luu-tao-moi':
        break;
    case 'quiz/cap-nhat':
        break;
    case 'quiz/luu-cap-nhat':
        break;
    case 'quiz/xoa':
        break;
    case 'quiz/lam-bai':
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>