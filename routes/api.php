<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('news', [NewsController::class, 'index']);
Route::get('sensei_latest', [UserController::class, 'getLatestSensei']);
Route::get('sensei_page', [UserController::class, 'getUserById']);
Route::post('login', [LoginController::class, 'handle']);
Route::post('register', [RegisterController::class, 'handle']);
Route::group(['middleware' => 'auth'], function () {
    Route::delete('logout', [LogoutController::class, 'handle']);
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
