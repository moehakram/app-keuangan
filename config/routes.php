<?php

use MA\PHPMVC\Router\Router;
use App\Controllers\AuthController;
use App\Controllers\DailyData;
use App\Controllers\FinancialReport;
use App\Controllers\InputData;
use App\Controllers\ProfileController;
use App\Controllers\UserController;
use App\Middleware\{CSRFMiddleware, OnlyMember, MustLoginAdmin, OnlyGuest};

Router::get('/test', fn() => view('layouts/app', [
    'title' => 'CashUp - Expenditure',
    'username' => 'me',
    'level' => 'admin'
]));
Router::get('/', 'HomeController@index');

// Auth
Router::get("/login", [AuthController::class, 'showLogin'], OnlyGuest::class);
Router::post("/register", [AuthController::class, 'register'], OnlyGuest::class);
Router::post("/login", [AuthController::class, 'login'], OnlyGuest::class);
Router::get("/logout", [AuthController::class, 'logout'], OnlyMember::class);

// daily data
Router::get('/pemasukan', [DailyData::class, 'pemasukan']);
Router::get('/pengeluaran', [DailyData::class, 'pengeluaran']);

// input data
Router::get('/tambahPemasukan', [InputData::class, 'formIncome']);
Router::get('/tambahPengeluaran', [InputData::class, 'formExpenditure']);

// financial report
Router::get('/laporan', [FinancialReport::class, 'laporan']);

// kelola user
Router::get('/administrator', [UserController::class, '']);

// Profile
// Router::get("/user/profile", [ProfileController::class, 'edit'], OnlyMember::class, MustLoginAdmin::class);
// Router::post("/user/profile", [ProfileController::class, 'update'], OnlyMember::class, CSRFMiddleware::class);
// Router::get("/user/password", [ProfileController::class, 'changePassword'], OnlyMember::class);
// Router::post("/user/password", [ProfileController::class, 'updatePassword'], OnlyMember::class, CSRFMiddleware::class);
