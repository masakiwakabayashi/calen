@extends('layouts.app')



@section('content')


<a href="{{ route('admin.edit', ['id' => $user->id]) }}" class="btn btn-success mr-5 mypage_btn">
    ユーザー名を変更
</a>


<a href="{{ route('admin.editpassword', ['id' => $user->id]) }}" class="btn btn-success mr-5 mypage_btn">
    パスワードを変更
</a>

@endsection