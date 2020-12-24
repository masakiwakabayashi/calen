@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">新しいイベントを追加する</div>
                <div class="card-body  new_date_add">
                    <a href="{{ route('event.create') }}" class="btn btn-danger">イベントを追加する</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    イベントを探す
                </div>
                <div class="card-body new_date_add">
                    <a href="{{ route('post.index') }}" class="btn btn-success">イベントを探す</a>
                </div>
            </div>
            <br>
            @foreach ($events as $event)
                <div class="card">
                    <div class="card-header">
                        {{ $event->event_day }}
                    </div>
                    <div class="card-body">
                        <div class="index_event_sentence">
                            <a class="" href="{{ route('event.edit', ['event_id' => $event->id]) }}">
                                <h3 class="">{{ $event->title }}</h3>
                            </a>
                        </div>
                        <div class="index_event_sentence">
                            <h5>開催場所 : {{ $event->place }}</h5>
                        </div>
                        <div class="index_event_sentence index_event_content">
                            <h5>詳細 : {{ $event->content }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col content_center">
                                <a href="{{ route('event.edit', ['event_id' => $event->id]) }}" class="btn btn-pink date_edit_btn">
                                    予定を変更する
                                </a>
                            </div>
                            <div class="col-12 separete"></div>
                            <div class="col">
                                <form action="{{ route('event.destroy', ['event_id' => $event->id]) }}" method="POST" class="delete_btn_wrapper">
                                    @method('DELETE')
                                    @csrf
                                    <section class="mobile_section">
                                        <button class="btn btn-blue-grey btn_right_event" onclick="return confirm('{{ $event->title }}を削除して大丈夫ですか？')">
                                            予定を削除する
                                        </button>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            <br>
        </div>
    </div>
</div>
@endsection
