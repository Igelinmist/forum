@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="card">
                    <h3>Forum Threads</h3>
                    <div class="card-body">
                        @foreach($threads as $thread)
                            <article>
                                <a href="{{ $thread->path() }}"><H4> {{ $thread->title }}</H4></a>
                                <div class="body">{{ $thread->body }}</div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
