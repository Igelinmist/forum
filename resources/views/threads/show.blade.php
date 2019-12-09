@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="card">
                <div class="card-body">
                        <article>
                            <div class="card-title"><strong>{{ $thread->title }}</strong></div>
                            <div class="card-body">{{ $thread->body }}</div>
                        </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="card">
                    @foreach($thread->replies as $reply)
                        <article>
                            <div class="card-header">{{$reply->owner->name}} said {{ $reply->created_at->diffForHumans() }}</div>
                            <div class="card-body"><small>{{ $reply->body }}</small></div>
                        </article>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
