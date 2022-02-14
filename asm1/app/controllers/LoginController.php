<?php
namespace App\Controllers;
class LoginController{
    
    public function loginForm(){
        include_once './app/views/auth/login-form.php';
    }

    public function postLogin(){
        var_dump($_POST);
    }
}
?>