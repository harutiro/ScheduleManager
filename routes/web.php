<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// スケジュール覧画面
Route::get('/', [ScheduleController::class, 'showList'])->name('ScheduleList');


// スケジュール作成画面
Route::get('/schedule/create', [ScheduleController::class, 'showCreate'])->name('ScheduleCreate');
// スケジュール作成処理
Route::post('/schedule/store', [ScheduleController::class, 'exeStore'])->name('ScheduleStore');


// スケジュール編集画面
Route::get('/schedule/edit/{id}', [ScheduleController::class, 'showEdit'])->name('ScheduleEdit');
// スケジュール編集処理
Route::post('/schedule/update', [ScheduleController::class, 'exeUpdate'])->name('ScheduleUpdate');

// スケジュール削除処理
Route::post('/schedule/delete/{id}', [ScheduleController::class, 'exeDelete'])->name('ScheduleDelete');


// スケジュール詳細画面
Route::get('/schedule/{id}', [ScheduleController::class, 'showDetail'])->name('ScheduleDetail');