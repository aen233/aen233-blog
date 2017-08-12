@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    @foreach ($posts as $post)
                        <li style="margin: 50px 0;">
                            <div class="title">
                                <a href="{{ route('posts.show',$post->id) }}">
                                    <h4>{{ $post->title }}</h4>
                                </a>
                            </div>
                            <div class="body">
                                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">编辑</a>
                                <form action="{{route('posts.destroy',$post->id) }}" method="POST" style="display: inline;" >
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" >删除</button>
                                </form>
                            </div>
                            <div class="body">
                                <p></p><p>{{ $post->body }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>
@endsection
