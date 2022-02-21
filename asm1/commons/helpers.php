<?php

const BASE_URL = "http://localhost/we16303-php2/asm1/";
const PUBLIC_URL = BASE_URL . 'public/';

const AUTH = 'auth';

function dd(){
    echo "<pre>";
    $arr = func_get_args();
    var_dump($arr);die;
}

?>