<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    /**
     * 予定一覧画面を表示
     */
    public function showList()
    {
        return view('schedule.list');
    }
}
