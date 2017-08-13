@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="content" style="padding: 50px;">
                <h1 style="text-align: center; margin-top: 50px;">{{ $post->title }}</h1>
                <hr>
                <div id="date" style="text-align: right;">
                    {{ $post->updated_at }}
                </div>

                <div id="date" style="text-align: right;">
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">编辑</a>
                    <form action="{{route('posts.destroy',$post->id) }}" method="POST" style="display: inline;" >
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" >删除</button>
                    </form>
                </div>
                <div id="content" style="margin: 20px;">
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
