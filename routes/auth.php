<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PromoCodeController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('/', function () {
            return redirect()->route("login");
        });
    });

    Route::middleware('auth')->group(function () {

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
        Route::get('/payments', [PaymentsController::class, "payments"])->name('payments');
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');
        Route::get('/promo-codes', [PromoCodeController::class, "index"])->name('promo.codes');
        Route::post('/add-promo', [PromoCodeController::class, "store"])->name('add.promo.code');
        Route::get('/delete-promo/{id}', [PromoCodeController::class, "delete"])->name('delete.promo.code');
    });
});
