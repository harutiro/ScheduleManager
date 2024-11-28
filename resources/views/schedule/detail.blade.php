@extends('layout')
@section('title', 'スケジュール詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>スケジュール詳細</h2>
        <table class="table table-striped">
            <tr>
                <th>予定</th>
                <td>{{ $schedule->title }}</td>
            </tr>
            <tr>
                <th>場所</th>
                <td>{{ $schedule->place }}</td>
            </tr>
            <tr>
                <th>開始日時</th>
                <td>{{ $schedule->start }}</td>
            </tr>
            <tr>
                <th>終了日時</th>
                <td>{{ $schedule->end }}</td>
            </tr>
            <tr>
                <th>詳細</th>
                <td>{{ $schedule->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection