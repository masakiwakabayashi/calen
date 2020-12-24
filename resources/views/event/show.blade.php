@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div>開催日</div>
                    <h2>{{ $event->event_day }}</h2>
                </div>
                <div class="card-body">
                    <div class="">
                        <div>イベント名</div>
                        <br>
                        <h3>{{ $event->title }}</h3>
                        <br>
                    </div>
                    <div class="">
                        <div>開催場所</div>
                        <br>
                        <h3>{{ $event->place }}</h3>
                        <br>
                    </div>
                    <div class="">
                        <div>詳細</div>
                        <br>
                        <h4>{{ $event->content }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-pink" href="{{ route('event.edit', ['event_id' => $event->id]) }}">
                                編集する
                            </a>
                        </div>
                        <div class="col">
                            <form  method="POST" action="{{ route('event.destroy', ['event_id' => $event->id]) }}" class="">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-blue-grey" rel="nofollow">
                                    削除する
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection