<?php
session_start();
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/db.php';
require_once './commons/routing.php';



$url = isset($_GET['url']) ? $_GET['url'] : "/";

applyRouting($url);

// $_SESSION['auth'] = [
//     "name" => "Trần hữu Thiện",
//     "id" => 1
// ];
// phroute
// illuminate/database
// illuminate/events
// jenssegers/blade


// $url mong muốn của người gửi request
// switch ($url) {
//     case 'login':
//         break;
//     case 'dashboard':
//         break;
//     case 'mon-hoc':
//         $ctr = new SubjectController();
//         $ctr->index();
//         break;
//     case 'mon-hoc/tao-moi':
//         $ctr = new SubjectController();
//         $ctr->addForm();
//         break;
//     case 'mon-hoc/luu-tao-moi':
//         $ctr = new SubjectController();
//         $ctr->saveAdd();
//         break;
//     case 'mon-hoc/cap-nhat':
//         break;
//     case 'mon-hoc/luu-cap-nhat':
//         break;
//     case 'mon-hoc/xoa':
//         $ctr = new SubjectController();
//         $ctr->remove();
//         break;
//     case 'mon-hoc/chi-tiet':
//         break;
//     case 'quiz':
//         $ctr = new QuizController();
//         $ctr->listQuizs();
//         break;
//     case 'quiz/tao-moi':
//         break;
//     case 'quiz/luu-tao-moi':
//         break;
//     case 'quiz/cap-nhat':
//         break;
//     case 'quiz/luu-cap-nhat':
//         break;
//     case 'quiz/xoa':
//         break;
//     case 'quiz/lam-bai':
//         break;
//     default:
//         echo "Đường dẫn bạn đang truy cập chưa được cho phép";
//         break;
// }


?>