@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>
                        {{ $event->event_day }}
                    </h2>
                </div>
                <form class="card-body" id="edit_card" action="{{ route('event.update', ['event_id' => $event->id]) }}" accept-charset="UTF-8" method="post">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="id" value="{{ $event->id }}">
                    <div class="form-group">
                        <label for="event_title">タイトル</label>
                        <input id="event_title" class="form-control @error('title') is-invalid @enderror" placeholder="イベント名" type="text" value="{{ old('title',$event->title) }}" name="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_title">開催日</label>
                        <input id="event_title" class="form-control @error('event_day') is-invalid @enderror" placeholder="開催日" type="text" value="{{ old('title',$event->event_day) }}" name="event_day">
                        @error('event_day')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_place">開催場所</label>
                        <input id="event_place" class="form-control @error('title') is-invalid @enderror" placeholder="開催場所" type="text" value="{{ old('title',$event->place) }}" name="place">
                        @error('place')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_memo">詳細</label>
                        <textarea id="event_memo" class="form-control @error('content') is-invalid @enderror" placeholder="詳細" name="content">{{ old('content', $event->content) }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col content_center">
                            <a href="{{ route('date.index') }}" class="btn btn-blue-grey">
                                戻る
                            </a>
                        </div>
                        <div class="col-12 separete"></div>
                        <div class="col">
                            <section class="mobile_section">
                                <button type="submit" class="btn btn-success btn_right_event">
                                    更新する
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