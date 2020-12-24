@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $post->post_title }}</h3>
                </div>
                <div class="card-body post_event_body">
                    <img src="{{ asset('event_img/'.$post->id.'.jpg') }}" alt="">
                </div>
                <div class="card-body">
                    <p>{{ $post->post_content }}</p>
                </div>
                <div class="form-group row">
                    <div class="col content_center">
                        <a href="{{ route('post.index') }}" class="btn btn-blue-grey">一覧に戻る</a>
                    </div>
                    <div class="col-12 separete"></div>
                    <div class="col content_center">
                        <a href="{{ route('post.event.create', ['post_id' => $post->id]) }}" class="btn btn-success">カレンダーに追加する</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection