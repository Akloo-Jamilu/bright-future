<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\createAccount;
use App\Http\Controllers\debitRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/create-account', function () {
    return view('create-account');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/create-account', [AuthController::class, 'showCreateAccountForm'])->name('createAccount');
    Route::get('/debit-request', [AuthController::class, 'showDebitRequestForm'])->name('debitRequest');
});



// routes/web.php
Route::post('/create-account', [createAccount::class, 'create']);
Route::post('/create-transaction', [debitRequest::class, 'create']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/create-business', [AuthController::class, 'showCreateAccountForm'])->name('createBusinessContent');
    Route::get('/debit-request', [AuthController::class, 'showDebitRequestForm'])->name('debitRequestContent');
    Route::get('/home', [AuthController::class, 'homeContent'])->name('homeContent');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


