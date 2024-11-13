<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// 認証が必要なルート
Route::middleware(['auth'])->group(function () {
    Route::get('/', [ScheduleController::class, 'showList'])->name('ScheduleList');
    Route::get('/schedule/create', [ScheduleController::class, 'showCreate'])->name('ScheduleCreate');
    Route::post('/schedule/store', [ScheduleController::class, 'exeStore'])->name('ScheduleStore');
    Route::get('/schedule/edit/{id}', [ScheduleController::class, 'showEdit'])->name('ScheduleEdit');
    Route::post('/schedule/update', [ScheduleController::class, 'exeUpdate'])->name('ScheduleUpdate');
    Route::post('/schedule/delete/{id}', [ScheduleController::class, 'exeDelete'])->name('ScheduleDelete');
    Route::get('/schedule/week', [ScheduleController::class, 'showWeek'])->name('ScheduleWeek');
    Route::get('/schedule/{id}', [ScheduleController::class, 'showDetail'])->name('ScheduleDetail');
});