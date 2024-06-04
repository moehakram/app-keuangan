<?php

use MA\PHPMVC\Router\Router;
use App\Controllers\AuthController;
use App\Controllers\ProfileController;
use App\Middleware\{CSRFMiddleware, OnlyMemberMiddleware, OnlyGuestMiddleware, MustLoginAdmin};

// Router::get('/', 'HomeController@index');
Router::get('/', fn() => view('/welcome'));
// Router::get('/', fn() => view('home/index'));

Router::post("/register", [AuthController::class, 'register']);
Router::get("/login", [AuthController::class, 'showLogin']);
Router::post("/login", [AuthController::class, 'login']);
Router::get("/user/logout", [AuthController::class, 'logout'], OnlyMemberMiddleware::class);

Router::get("/user/profile", [ProfileController::class, 'edit'], OnlyMemberMiddleware::class, MustLoginAdmin::class);
Router::post("/user/profile", [ProfileController::class, 'update'], OnlyMemberMiddleware::class, CSRFMiddleware::class);
Router::get("/user/password", [ProfileController::class, 'changePassword'], OnlyMemberMiddleware::class);
Router::post("/user/password", [ProfileController::class, 'updatePassword'], OnlyMemberMiddleware::class, CSRFMiddleware::class);
