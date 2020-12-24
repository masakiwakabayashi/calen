@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>
                        {{ $post->post_title }}
                    </h2>
                </div>
                <form class="card-body" action="{{ route('event.store') }}" accept-charset="UTF-8" data-remote="true" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ app('current_user')->id }}">
                    {{-- <input type="hidden" name="date_id" value="{{ $date->id }}"> --}}
                    <div class="form-group">
                        <label for="event_title">イベント名</label>
                        <input id="event_title" autofocus="autofocus" class="form-control @error('title') is-invalid @enderror" placeholder="イベント名" type="text" name="title" value="{{ $post->post_title }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_day_create">開催日</label>
                        <input id="event_day_create" autofocus="autofocus" class="form-control @error('title') is-invalid @enderror" placeholder="開始日" type="date" name="event_day" value="{{ $post->post_event_day }}">
                        @error('event_day')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_place">開催場所</label>
                        <input id="event_place" autofocus="autofocus" class="form-control @error('place') is-invalid @enderror" placeholder="開催場所" type="text" name="place" value="{{ $post->post_place }}">
                        @error('place')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_content">詳細</label>
                        <textarea id="event_content" autofocus="autofocus" class="form-control @error('content') is-invalid @enderror" placeholder="詳細" name="content" rows="4">{{ $post->post_content }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col content_center">
                            <a href="{{ route('post.index') }}" class="btn btn-blue-grey">一覧に戻る</a>
                        </div>
                        <div class="col-12 separete"></div>
                        <div class="col">
                            <section class="mobile_section">
                                <button type="submit" class="btn btn-secondary">
                                    カレンダーに追加
                                </button>
                            </section>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection