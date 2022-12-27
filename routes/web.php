<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Database\Console\Migrations\RollbackCommand;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::controller(PostController::class)->group(function () {
    Route::get('post', 'showUsers');
});

//Route::get('post', [PostController::class, 'showUsers']);

//Route::get('post/create', [PostController::class, 'createPost']);

//------------------------------------------------------------------

Route::resource('users', UserController::class)->only([
    'create','index'
]);
//------------__invoke__-----------

Route::get('user_profile', UserProfileController::class);

