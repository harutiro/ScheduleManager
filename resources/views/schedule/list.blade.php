@extends('layout')
@section('title', 'スケジュール一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>全てのスケジュール</h2>
        <table class="table table-striped">
            <tr>
                <th>予定</th>
                <th>開始日時</th>
                <th>終了日時</th>
                <th>詳細</th>
            </tr>
            @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule->title }}</td>
                <td>{{ $schedule->start }}</td>
                <td>{{ $schedule->end }}</td>
                <td><a href="/schedule/{{ $schedule->id }}">詳細</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection