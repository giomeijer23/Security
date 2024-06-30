<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------------/Users/giomeijer/Downloads/Laravel-Breeze-Example-main/app/Http/Controllers/BlogController.php---------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('/instellingen', function () {
        return view('instellingen');
    })->name('instellingen');

    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/index', function () {
        return view('index');
    })->name('home');

    Route::get('/profileFacts', function () {
        return view('profileFacts');
    })->name('profileFacts');

    Route::get('/dashboardFacts', function () {
        return view('dashboardFacts');
    })->name('dashboardFacts');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/blog', function () {
        return view('blog');
    })->name('blog');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
});

require __DIR__.'/auth.php';
