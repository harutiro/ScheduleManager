<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route("ScheduleList")}}">スケジュール管理アプリ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{route("ScheduleList")}}">全てのスケジュール <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="{{route("ScheduleWeek")}}">週間スケジュール</a>
            <a class="nav-item nav-link" href="#">月間スケジュール</a>
            <a class="nav-item nav-link" href="{{route("ScheduleCreate")}}">新規スケジュール登録</a>
        </div>
    </div>
    <!-- ログイン状態表示 -->
    <div class="navbar-nav">
        @if(Auth::check())
        <span class="navbar-text">ログイン中：{{Auth::user()->name}}</span>｀
        <form method="POST" action="{{route("logout")}}">
            @csrf
            <button type="submit" class="btn btn-danger">ログアウト</button>
        </form>
        @else
        <a class="nav-item nav-link" href="{{route("login")}}">ログイン</a>
        <a class="nav-item nav-link" href="{{route("register")}}">ユーザー登録</a>
        @endif
    </div>
</nav>