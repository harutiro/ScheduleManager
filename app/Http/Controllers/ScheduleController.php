<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{

    /**
     * 予定一覧画面を表示
     */
    public function showList()
    {
        $schedules = Schedule::all();

        return view(
            'schedule.list',
            [
                'schedules' => $schedules
            ]
        );
    }
}
