@extends('layout')
@section('title', 'スケジュール一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>全てのスケジュール</h2>
        <table class="table table-striped">
            <tr>
                <th>予定</th>
                <th>日時</th>
                <th>場所</th>
                <th>詳細</th>
            </tr>
            <tr>
                <td>会議</td>
                <td>2020-07-01 10:00</td>
                <td>会議室</td>
                <td>新規プロジェクトの打ち合わせ</td>
            </tr>
        </table>
    </div>
</div>
@endsection