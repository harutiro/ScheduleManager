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

    /**
     * 予定詳細画面を表示
     */
    public function showDetail($id)
    {
        $schedule = Schedule::find($id);
        if (is_null($schedule)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('ScheduleList'));
        }
        return view('schedule.detail', ['schedule' => $schedule]);
    }
}
