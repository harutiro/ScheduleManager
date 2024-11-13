<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', [ScheduleController::class, 'showList'])->name('ScheduleList');