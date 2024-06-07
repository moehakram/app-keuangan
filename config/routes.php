<?php

use MA\PHPMVC\Router\Router;
use App\Controllers\AuthController;
use App\Controllers\ProfileController;
use App\Middleware\{CSRFMiddleware, OnlyMemberMiddleware, OnlyGuestMiddleware, MustLoginAdmin};

// Router::get('/', fn() => view('/welcome'));
Router::get('/', 'HomeController@index');

Router::get("/login", [AuthController::class, 'showLogin']);
Router::post("/register", [AuthController::class, 'register']);
Router::post("/login", [AuthController::class, 'login']);
Router::get("/logout", [AuthController::class, 'logout']);

Router::get("/user/profile", [ProfileController::class, 'edit'], OnlyMemberMiddleware::class, MustLoginAdmin::class);
Router::post("/user/profile", [ProfileController::class, 'update'], OnlyMemberMiddleware::class, CSRFMiddleware::class);
Router::get("/user/password", [ProfileController::class, 'changePassword'], OnlyMemberMiddleware::class);
Router::post("/user/password", [ProfileController::class, 'updatePassword'], OnlyMemberMiddleware::class, CSRFMiddleware::class);
