<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Requests\ScheduleRequest;

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

    /**
     * 予定登録画面を表示
     */
    public function showCreate()
    {
        return view('schedule.form');
    }

    /**
     * 予定登録処理
     */
    public function exeStore(ScheduleRequest $request)
    {
        $inputs = $request->all();
        $userId = 1; // TODO: 仮の値

        \DB::beginTransaction();
        try {
            Schedule::create([
                'title' => $inputs['title'],
                'description' => $inputs['description'],
                'start' => $inputs['start'],
                'end' => $inputs['end'],
                'user_id' => $userId,
            ]);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '予定を登録しました');
        return redirect(route('ScheduleList'));
    }


    /**
     * 予定編集画面を表示
     */
    public function showEdit($id)
    {
        $schedule = Schedule::find($id);
        if (is_null($schedule)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('ScheduleList'));
        }
        return view('schedule.edit', ['schedule' => $schedule]);
    }

    /**
     * 予定編集処理
     */
    public function exeUpdate(ScheduleRequest $request)
    {
        $inputs = $request->all();
        \DB::beginTransaction();
        try {
            $schedule = Schedule::find($inputs['id']);
            $schedule->fill([
                'title' => $inputs['title'],
                'description' => $inputs['description'],
                'start' => $inputs['start'],
                'end' => $inputs['end'],
            ]);
            $schedule->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '予定を更新しました');
        return redirect(route('ScheduleList'));
    }
}
