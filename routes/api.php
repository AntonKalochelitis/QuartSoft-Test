<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
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

    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('auth/reset-password');

    Route::post('/reset-password-by-token', [AuthController::class, 'resetPasswordByToken'])
        ->name('auth/reset-password-by-token');;

    Route::post('logout', [AuthController::class, 'logout'])
        ->middleware(['auth:sanctum'])
        ->name('auth/logout');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('list', [AdminController::class, 'showAdminList'])
            ->name('admin/list');

        Route::post('add', [AdminController::class, 'addToAdminList'])
            ->name('admin/add');

        Route::post('delete', [AdminController::class, 'deleteFromAdminList'])
            ->name('admin/delete');

        Route::get('subscription/list', [AdminController::class, 'showSubscriptionList'])
            ->name('admin/subscription/list');

        Route::post('subscription/add', [AdminController::class, 'addToSubscriptionList'])
            ->name('admin/subscription/add');

        Route::post('subscription/edit', [AdminController::class, 'editSubscription'])
            ->name('admin/subscription/edit');

        Route::post('subscription/delete', [AdminController::class, 'deleteFromSubscriptionList'])
            ->name('admin/subscription/delete');
    });

    Route::group(['prefix' => 'post'], function () {
        Route::put('publish', [PostController::class, 'publish'])
            ->name('post/publish');
        Route::post('unpublish', [PostController::class, 'unpublish'])
            ->name('post/unpublish');
        Route::delete('delete-publish', [PostController::class, 'deletePublish'])
            ->name('post/delete-publish');
    });

    Route::group(['prefix' => 'payment'], function () {
        Route::get('system/list', [PaymentController::class, 'showSystemList'])
            ->name('payment/system/list');

        Route::put('subscription/buy', [PaymentController::class, 'subscriptionBuy'])
            ->name('payment/subscription/buy');

        Route::get('subscription/show', [PaymentController::class, 'subscriptionShow'])
            ->name('payment/subscription/show');

        Route::post('subscription/cancel', [PaymentController::class, 'subscriptionCancel'])
            ->name('payment/subscription/cancel');
    });
});
