@extends('layouts.app')

@section('content')


<div class="cointainer">
    <div class="row">
        <div class="col-6">
            <p>管理者のホーム画面</p>
            <p>まずは管理者の情報を変更できるページ</p>
            {{--  --}}
            <a href="">ここからお店の管理画面に移動できる</a>
            <p>admin/home</p>
            <p>admin/show</p>
            <p>admin/edit</p>
            <p>admin/editpassword</p>
            <p>ここの管理者のホーム画面からインタビューの投稿、お店の情報の登録、求人記事の登録ができる画面に飛ぶ</p>
            <p>お店に関しては以下のブレード</p>
            {{--  --}}
            <a href="">ここから個別のお店のページに移動できる</a>
            <p>admin/shop/home</p>
            {{-- <p>admin/shop/index</p> --}}
            {{--  --}}
            <a href="">ここからお店の情報の編集画面、削除画面、インタビュー、求人に移動できる</a>
            <a href="">ここにお店のインタビューと求人の一覧も表示されている</a>
            <a href="">それぞれのインタビューと求人に削除ボタンと編集画面に移動するボタンがついてる</a>
            <p>admin/shop/{id}/show</p>
            {{--  --}}
            <a href="">お店の情報を編集する画面</a>
            <p>admin/shop/{id}/edit</p>
            <p>インタビューとリクルートもこれと同じ</p>
            <a href="">インタビューを編集する画面</a>
            <p>admin/shop/{id}/interview/{interview_id}/edit</p>
            <a href="">求人を編集する画面</a>
            <p>admin/shop/{id}/recruit/{recruit_id}/edit</p>
            <p>それぞれshopのところが変わるだけ</p>
            <br>
            <br>
            <br>
            <p>一般ユーザーの画面</p>
            {{--  --}}
            <a href="">ログインしていないユーザーを含めて全ユーザー共通のホーム</a>
            <p>/index</p>
            <p>shop/{id}/</p>
            <p>shop/{id}/interview/{interview_id}/</p>
            <p>shop/{id}/recruit/{recruit_id}/edit</p>
            {{--  --}}
            <p>ログインしているユーザーしか表示できない画面</p>
            <p>user/home</p>
            <p>user/show</p>
            <p>user/edit</p>
            <p>user/editpassword</p>
        </div>
        <div class="col-6">
            <p>管理者アカウントの名前を変更</p>
            <a href="{{ route('admin.edit', ['id' => $user->id]) }}" class="btn btn-success mr-5 mypage_btn">
                ユーザー名を変更
            </a>
        </div>
        <div class="col-6">
            <p>管理者アカウントのパスワードを変更</p>
            <a href="{{ route('admin.editpassword', ['id' => $user->id]) }}" class="btn btn-success mr-5 mypage_btn">
                パスワードを変更
            </a>
        </div>
    </div>
</div>





@endsection
