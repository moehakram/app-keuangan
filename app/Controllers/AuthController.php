<?php

namespace App\Controllers;

use MA\PHPMVC\Interfaces\Request;
use App\Models\User\UserLoginRequest;
use App\Models\User\UserRegisterRequest;
use MA\PHPMVC\Exception\ValidationException;

class AuthController extends BaseController
{
    protected $layout = 'auth';

    public function showLogin() // Menampilkan formulir login
    {
        response()->setNoCache();
        return $this->view('auth/login', [
            'title' => 'Login User',
            'csrf_token' => set_CSRF('/login')
        ]);
    }

    public function login(Request $request) // Proses login pengguna
    {
        $req = new UserLoginRequest();
        $req->username = $request->post('username');
        $req->password = $request->post('password');
        try {
            $user = $this->userService->login($req);
            $this->sessionService->create($user);
            response()->redirect('/');
        } catch (ValidationException $exception) {

            return $this->view('auth/login', [
                'title' => 'Login User',
                'error' => $exception->getMessage()
            ]);
        }
    }

    // public function showRegistration() // Menampilkan formulir registrasi
    // {
    //     return $this->view('auth/register', [
    //         'title' => 'Register New User',
    //         'csrf_token' => set_CSRF('/user/register')
    //     ]);
    // }

    public function register(Request $request)  // Proses registrasi pengguna
    {
        $req = new UserRegisterRequest();
        $req->username = $request->post('username');
        $req->email = $request->post('email');
        $req->password = $request->post('password');
        $req->confirmPassword = $request->post('confirmPassword');

        try {
            $this->userService->register($req);
            response()->redirect('/login');
        } catch (ValidationException $exception) {

            return $this->view('auth/login', [
                'title' => 'Register new User',
                'error' => $exception->getMessage()
            ]);
        }
    }

    public function showResetPassword() // Menampilkan formulir reset password
    {
        // Implementation
    }

    public function resetPassword() // Proses reset password
    {
        // Implementation
    }

    public function logout() // Proses logout pengguna
    {
        $this->sessionService->destroy();
        response()->redirect('/');
    }
}