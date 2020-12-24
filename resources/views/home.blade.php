@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>ユーザー名の編集</p>
                    <a href="{{ route('user.edit_name', ['id' => app('current_user')->id]) }}">ユーザー名の編集</a>
                    <br>
                    <br>
                    <p>パスワードの変更</p>
                    <a href="{{ route('user.edit_password', ['id' => app('current_user')->id]) }}">パスワードの変更</a>
                </div>
            </div>
            {{-- <br> --}}
            <br>
            <div class="card">
                <div class="card-header">ここからホームに移動する</div>
                <div class="card-body">
                    <a class="btn btn-pink" href="{{ route('date.index') }}">
                        カレンダーに移動する
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
