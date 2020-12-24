@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>
                        パスワードの変更
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('user.update_password', ['id' => app('current_user')->id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <div class="">
                                    <label for="current-password">
                                        現在のパスワードを入力してください
                                    </label>
                                    <input id="current-password" type="password"  name="current_password"
                                        value="" class="form-control @error('current_password') is-invalid @enderror">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="new-password">
                                        新しいパスワードを入力してください
                                    </label>
                                    <input id="new-password" type="password"  name="password"
                                        value="" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="confirmation-password">
                                        確認のためもう一度新しいパスワードを入力してください
                                    </label>
                                    <input id="confirmation-password" type="password"  name="password_confirmation"
                                        value="" class="form-control @error('password_confirmation') is-invalid @enderror">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-btn-wrap row">
                                <div class="col content_center">
                                    <a href="{{ route('date.index') }}" class="btn btn-blue-grey">
                                        一覧へ戻る
                                    </a>
                                </div>
                                <div class="col-12 separete"></div>
                                <div class="col">
                                    <section class="mobile_section">
                                        <button class="btn btn-success btn_right_event">
                                            更新
                                        </button>
                                    </section>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection