<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IntershipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/profile', function () {
    return view('company/profile');
});
Route::get('/post', function () {
    return view('company/post');
});

Route::post('/company/profile', [CompanyController::class, 'ProfileForm'])->name('company.profile');
Route::post('/company/post', [IntershipController::class, 'Post'])->name('internship.post');
