<?php
namespace App\Controllers;
use App\Models\User;
class LoginController{
    
    public function loginForm(){
        return view('auth.login-form');
    }

    public function postLogin(){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $user = User::where('email', $email)->first();;
        if($user && password_verify($password, $user->password)){
            $sessuser = $user->toArray();
            unset($sessuser['password']);
            $_SESSION[AUTH] = $sessuser;
            header('location: ' . BASE_URL . 'admin/dashboard');
            die;
        }
        header('location: ' . BASE_URL . 'login?msg=Tài khoản/mật khẩu không chính xác');

    }
}
?>