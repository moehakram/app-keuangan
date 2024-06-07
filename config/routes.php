<?php

use MA\PHPMVC\Router\Router;
use App\Controllers\AuthController;
use App\Controllers\ProfileController;
use App\Middleware\{CSRFMiddleware, OnlyMember, MustLoginAdmin, OnlyGuest};

// Router::get('/', fn() => view('/welcome'));
Router::get('/', 'HomeController@index');


// Auth
Router::get("/login", [AuthController::class, 'showLogin'], OnlyGuest::class);
Router::post("/register", [AuthController::class, 'register'], OnlyGuest::class);
Router::post("/login", [AuthController::class, 'login'], OnlyGuest::class);
Router::get("/logout", [AuthController::class, 'logout'], OnlyMember::class);

// Profile
Router::get("/user/profile", [ProfileController::class, 'edit'], OnlyMember::class, MustLoginAdmin::class);
Router::post("/user/profile", [ProfileController::class, 'update'], OnlyMember::class, CSRFMiddleware::class);
Router::get("/user/password", [ProfileController::class, 'changePassword'], OnlyMember::class);
Router::post("/user/password", [ProfileController::class, 'updatePassword'], OnlyMember::class, CSRFMiddleware::class);
