<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/phishing', function () {
    return view('phishing');
})->middleware(['auth', 'verified'])->name('phishing');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/quiz/phishing', function () {
        return view('quiz.phishing');
    })->name('quiz.phishing');
Route::post('/quiz/{id}/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/password', function () {
    return view('password');
})->middleware(['auth', 'verified'])->name('password');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/quiz/password-security', function () {
    return view('quiz.password-security');
    })->name('quiz.password-security');
Route::post('/quiz/{id}/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});

Route::get('/social-engineering', function () {
    return view('social-engineering');
})->middleware(['auth', 'verified'])->name('social-engineering');
