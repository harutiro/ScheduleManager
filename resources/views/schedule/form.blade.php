@extends('layout')
@section('title', 'ブログ投稿')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>スケジュール登録フォーム</h2>
        <form method="POST" action="{{ route('ScheduleStore') }}" onSubmit="return checkSubmit()">
            @csrf

            <!-- 以下項目 -->
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input id="title" name="title" class="form-control" value="{{ old('title') }}" type="text">
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">
                    内容
                </label>
                <textarea id="description" name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="place   ">
                    場所
                </label>
                <input id="place" name="place" class="form-control" value="{{ old('place') }}" type="text">
                @if ($errors->has('place'))
                    <div class="text-danger">
                        {{ $errors->first('place') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="start">
                    開始日
                </label>
                <input id="start" name="start" class="form-control" value="{{ old('start') }}" type="date">
                @if ($errors->has('start'))
                    <div class="text-danger">
                        {{ $errors->first('start') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="end">
                    終了日
                </label>
                <input id="end" name="end" class="form-control" value="{{ old('end') }}" type="date">
                @if ($errors->has('end'))
                    <div class="text-danger">
                        {{ $errors->first('end') }}
                    </div>
                @endif
            </div>


            <!-- 以下ボタン -->
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('ScheduleList') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection