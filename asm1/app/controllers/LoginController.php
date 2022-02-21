<?php
namespace App\Controllers;
class LoginController{
    
    public function loginForm(){
        return view('auth.login-form');
    }

    public function postLogin(){
        var_dump($_POST);
    }
}
?>