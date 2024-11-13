@extends('layout')
@section('title', '週間スケジュール')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>週間スケジュール ({{ \Carbon\Carbon::parse($startOfWeek)->format('Y-m-d') }} - {{ \Carbon\Carbon::parse($endOfWeek)->format('Y-m-d') }})</h2>
        @if(session('err_msg'))
            <p class="text-danger">{{ session('err_msg') }}</p>
        @endif
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
                <td>{{ \Carbon\Carbon::parse($schedule->start)->format('Y-m-d H:i') }}</td>
                <td>{{ \Carbon\Carbon::parse($schedule->end)->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('ScheduleDetail', ['id' => $schedule->id]) }}">
                        <i class="fas fa-info-circle p-3"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection