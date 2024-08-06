<?php

use App\Http\Controllers\createAccount;
use App\Http\Controllers\debitRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/create-account', function () {
    return view('create-account');
});

// routes/web.php
Route::post('/create-account', [createAccount::class, 'create']);
Route::post('/create-transaction', [debitRequest::class, 'create']);

