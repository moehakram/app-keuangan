<?php

namespace App\Controllers;

use MA\PHPMVC\MVC\Controller;
use MA\PHPMVC\Exception\ValidationException;
use App\Models\User\UserProfileUpdateRequest;
use App\Models\User\UserPasswordUpdateRequest;
use MA\PHPMVC\Interfaces\Request;

class ProfileController extends Controller
{
    use UserServiceTrait;

    protected $layout = 'app';

    public function show() // Menampilkan profil pengguna
    {
        // implementation
    }

    public function edit() // Menampilkan formulir pengeditan profil
    {
        $user = $this->sessionService->current();

        return $this->view('profile/profile', [
            "title" => "Update user profile",
            "user" => [
                "username" => $user->username,
                "email" => $user->email
            ],
            'csrf_token' => set_CSRF('/user/profile')
        ]);
    }

    public function update(Request $request) // Menyimpan perubahan pada profil yang telah diedit
    {
        $user = $this->sessionService->current();

        $req = new UserProfileUpdateRequest();
        $req->username = $user->username;
        $req->email = $request->post('email');

        try {
            $user = $this->userService->updateProfile($req);
            $this->sessionService->create($user); //update cookie session setelah update profile
            response()->redirect('/');
        } catch (ValidationException $exception) {
            return $this->view('profile/profile', [
                "title" => "Update user profile",
                "error" => $exception->getMessage(),
                "user" => [
                    "username" => $user->username,
                    "email" => $request->post('email')
                ]
            ]);
        }
    }

    public function changePassword() // Menampilkan formulir penggantian kata sandi
    {
        $user = $this->sessionService->current();
        return $this->view('profile/password', [
            "title" => "Update user password",
            "user" => [
                "username" => $user->username
            ],
            'csrf_token' => set_CSRF('/user/password')
        ]);
    }

    public function updatePassword(Request $request) // Menyimpan perubahan pada kata sandi
    {
        $user = $this->sessionService->current();
        $req = new UserPasswordUpdateRequest();
        $req->username = $user->username;
        $req->oldPassword = $request->post('oldPassword');
        $req->newPassword = $request->post('newPassword');

        try {
            $this->userService->updatePassword($req);
            response()->redirect('/');
        } catch (ValidationException $exception) {
            return $this->view('profile/password', [
                "title" => "Update user password",
                "error" => $exception->getMessage(),
                "user" => [
                    "username" => $user->username
                ]
            ]);
        }
    }
}