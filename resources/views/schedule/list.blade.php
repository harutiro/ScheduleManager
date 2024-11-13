@extends('layout')
@section('title', 'スケジュール一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>全てのスケジュール</h2>
        @if(session('err_msg'))
            <p class="text-danger">{{ session('err_msg') }}</p>
        @endif
        <table class="table table-striped">
            <tr>
                <th>予定</th>
                <th>開始日時</th>
                <th>終了日時</th>
                <th>処理</th>
            </tr>
            @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule->title }}</td>
                <td>{{ $schedule->start }}</td>
                <td>{{ $schedule->end }}</td>
                <td>
                    <!-- 詳細はアイコンで -->
                    <a href="{{ route('ScheduleDetail', ['id' => $schedule->id]) }}">
                        <i class="fas fa-info-circle p-3"></i>
                    </a>
                    <!-- 編集はアイコンで -->
                    <a href="{{ route('ScheduleEdit', ['id' => $schedule->id]) }}">
                        <i class="fas fa-edit p-3"></i>
                    </a>
                    <!-- 削除はアイコンでpostを送る -->
                    <form 
                        method="POST" 
                        action="{{ route('ScheduleDelete', ['id' => $schedule->id]) }}"
                        onsubmit="return checkDelete()">
                        @csrf
                        <button
                            type="submit"
                            style="background: transparent; border: none; color: #007bff;"
                            onclick="">
                            <i class="fas fa-trash-alt p-3"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    function checkDelete() {
        if (window.confirm('消去してよろしいですか？')) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection