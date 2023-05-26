<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login'])
        ->name('auth/login');

    Route::post('register', [AuthController::class, 'register'])
        ->name('auth/register');

    Route::post('/confirm/email', [AuthController::class, 'confirmEmail'])
        ->name('auth/confirm/email');

    Route::post('logout', [AuthController::class, 'logout'])
        ->middleware(['auth:sanctum'])
        ->name('auth/logout');
});

Route::group(['middleware' => 'auth:sanctum'], function () {


    Route::get('/payment/system/list', [PaymentController::class, 'showSystemList'])
        ->name('/payment/system/list');


});
