@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>
                        ユーザー名の編集
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('user.update_name', ['id' => app('current_user')->id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="">
                                <label for="my-name">
                                    ユーザー名
                                </label>
                                <input id="my-name" type="text" name="name"
                                    value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-btn-wrap row">
                                <div class="col content_center">
                                    {{--  --}}
                                    <a href="{{ route('date.index') }}" class="btn btn-blue-grey">
                                        一覧へ戻る
                                    </a>
                                </div>
                                <div class="col">
                                    <button class="btn btn-success btn_right_event">
                                        更新
                                    </button>
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