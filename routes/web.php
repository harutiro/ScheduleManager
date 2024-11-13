<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// 認証が必要なルート
Route::middleware(['auth'])->group(function () {
    Route::get('/', [ScheduleController::class, 'showList'])->name('ScheduleList');
    Route::get('/schedule/create', [ScheduleController::class, 'showCreate'])->name('ScheduleCreate');
    Route::post('/schedule/store', [ScheduleController::class, 'exeStore'])->name('ScheduleStore');
    Route::get('/schedule/edit/{id}', [ScheduleController::class, 'showEdit'])->name('ScheduleEdit');
    Route::post('/schedule/update', [ScheduleController::class, 'exeUpdate'])->name('ScheduleUpdate');
    Route::get('/schedule/{id}', [ScheduleController::class, 'showDetail'])->name('ScheduleDetail');
    Route::post('/schedule/delete/{id}', [ScheduleController::class, 'exeDelete'])->name('ScheduleDelete');
});