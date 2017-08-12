@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Dashboard</div>--}}

                    <div class="panel-body">
                        <ul>
                            @foreach ($posts as $post)
                                <li style="margin: 50px 0;">
                                    <div class="title">
                                        <a href="{{ route('posts.show',['post'=>$post->id]) }}">
                                            <h4>{{ $post->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="body">
                                        <p>{{ $post->body }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
