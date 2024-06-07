<?php

namespace  App\Service;

use MA\PHPMVC\Database\Database;
use App\Repository\UserRepository;
use MA\PHPMVC\Exception\ValidationException;
use App\Domain\User;
use Exception;
use App\Models\User\{UserRegisterRequest, UserLoginRequest, UserProfileUpdateRequest, UserPasswordUpdateRequest};

class UserService
{

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(UserRegisterRequest $request): User
    {
        if(!$request->validate()){
            throw new ValidationException("Id and Password can not blank");
        }
        
        try {
            Database::beginTransaction();
            $user = $this->userRepository->findById($request->username);
            if ($user != null) {
                throw new ValidationException("username, email, Password can not blank");
            }

            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = password_hash($request->password, PASSWORD_BCRYPT);
            $user->status = 'aktif';
            $user->level = 'admin';
            $user->no_rek = strRandom(9);

            $this->userRepository->save($user);

            Database::commitTransaction();
            return $user;
        } catch (Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    public function login(UserLoginRequest $request): User
    {
       if(!$request->validate()){
            throw new ValidationException("username dan password tidak boleh kosong !");
       }

        $user = $this->userRepository->findByUsernameOrEmail($request->username, $request->username);
        if ($user == null) {
            throw new ValidationException("username atau password Anda salah !");
        }

        if (password_verify($request->password, $user->password)) {
            return $user;
        } else {
            throw new ValidationException("username atau password Anda Salah !");
        }
    }

    public function updateProfile(UserProfileUpdateRequest $request): User
    {
        

        try {
            Database::beginTransaction();

            $user = $this->userRepository->findById($request->username);
            if ($user == null) {
                throw new ValidationException("User is not found");
            }

            $user->username = $request->username;
            $this->userRepository->update($user);

            Database::commitTransaction();
            return $user;
        } catch (Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    // private function validateUserProfileUpdateRequest(UserProfileUpdateRequest $request)
    // {
    //     if (
    //         $request->id == null || $request->name == null ||
    //         trim($request->id) == "" || trim($request->name) == ""
    //     ) {
    //         throw new ValidationException("Id, Name can not blank");
    //     }
    // }

    public function updatePassword(UserPasswordUpdateRequest $request): User
    {
        $this->validateUserPasswordUpdateRequest($request);

        try {
            Database::beginTransaction();

            $user = $this->userRepository->findById($request->username);
            if ($user == null) {
                throw new ValidationException("User is not found");
            }

            if (!password_verify($request->oldPassword, $user->password)) {
                throw new ValidationException("Old password is wrong");
            }

            $user->password = password_hash($request->newPassword, PASSWORD_BCRYPT);
            $this->userRepository->update($user);

            Database::commitTransaction();
            return $user;
        } catch (Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    private function validateUserPasswordUpdateRequest(UserPasswordUpdateRequest $request)
    {
        if (
            $request->username == null || $request->oldPassword == null || $request->newPassword == null ||
            trim($request->username) == "" || trim($request->oldPassword) == "" || trim($request->newPassword) == ""
        ) {
            throw new ValidationException("Id, Old Password, New Password can not blank");
        }
    }
}
