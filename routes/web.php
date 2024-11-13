<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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


// スケジュール詳細画面
Route::get('/schedule/{id}', [ScheduleController::class, 'showDetail'])->name('ScheduleDetail');