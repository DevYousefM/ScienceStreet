<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/competition', [FrontController::class, "competition"])->name('competition');
Route::get('/competition-en', [FrontController::class, "competition_en"])->name('competition.en');
Route::get('/teachers-training', [FrontController::class, "teachers_training"])->name('teachers.training');
Route::get('/online-courses', [FrontController::class, "online_courses"])->name('online.courses');

Route::get('/events/science-day', [FrontController::class, "science_day"])->name('science.day');
Route::get('/events/summer-camps', [FrontController::class, "summer_camps"])->name('summer.camps');
Route::get('/events/shows', [FrontController::class, "shows"])->name('shows');

Route::get('/register/{name}', [PaymentsController::class, "index"])->name('register.form');
Route::post('/register/process', [PaymentsController::class, "process_register"])->name('register.process');
Route::get('/callback', [PaymentsController::class, "verifyWithPaymob"])->name('register.callback');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/export-payments', [PaymentsController::class, 'export'])->name('export.payments');
});

require __DIR__ . '/auth.php';
