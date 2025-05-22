<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityControler;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/activities', [ActivityControler::class, 'index']);
