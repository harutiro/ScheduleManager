<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

// スケジュール覧画面
Route::get('/', [ScheduleController::class, 'showList'])->name('ScheduleList');


// スケジュール作成画面
Route::get('/schedule/create', [ScheduleController::class, 'showCreate'])->name('ScheduleCreate');
// スケジュール作成処理
Route::post('/schedule/store', [ScheduleController::class, 'exeStore'])->name('ScheduleStore');


// スケジュール詳細画面
Route::get('/schedule/{id}', [ScheduleController::class, 'showDetail'])->name('ScheduleDetail');