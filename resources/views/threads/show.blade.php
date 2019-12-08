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
    </div>
@endsection
