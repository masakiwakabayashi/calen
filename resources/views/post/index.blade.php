@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="search_form">
                <form action="{{ route('post.event.search') }}" method="POST">
                    @csrf
                    <input type="text" name="keyword" value="{{ $keyword }}" placeholder="キーワードを入力してください" size="28" class="search_form_input">
                    <button class="seach_btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <br>
            <div class="">
                全 <span>{{ $posts_counted }}</span> 件
            </div>
            @foreach ($posts as $post)
            <br>
            <a class="" href="{{ route('post.show', ['post_id' => $post->id]) }}">
                <div class="card">
                    <div class="card-body post_event_body">
                        <img src="{{ asset('event_img/'.$post->id.'.jpg') }}" alt="">
                    </div>
                    <div class="card-header">
                        <h4 id="index_event_title">{{ $post->post_title }}</h4>
                    </div>
                </div>
            </a>
            @endforeach
            <br>
        </div>
    </div>
</div>
@endsection