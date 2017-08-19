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
                            <div class="body" >
                                auther : <a href="#">{{ $post->user->name }}</a>&nbsp;&nbsp;
                                time : <i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}&nbsp;&nbsp;
                                标签 ：
                                    @if($post->tags)
                                        @foreach( $post->tags as $tag)
                                        <i class="fa fa-tag"></i><a href="{{route('tags.show',$tag->id)}}"> {{ $tag->name or '-'}}&nbsp;&nbsp;</a>
                                        @endforeach
                                    @endif

                                评论 :
                                <a href="{{route('posts.show',$post->id)}}">{{ $post->comments->count() }}&nbsp;&nbsp;</a>
                            </div>
                            <div class="body" style="text-align: right;">
                                @can('update',$post)
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">编辑</a>
                                @endcan
                                @can('delete',$post)
                                    <form action="{{route('posts.destroy',$post->id) }}" method="POST" style="display: inline;" >
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger" >删除</button>
                                    </form>
                                @endcan
                            </div>
                            <div class="body">
                                <p></p><p>{{ $post->content }}</p>
                            </div>
                        </li>
                    @endforeach
                    {!! $posts->links() !!}
                </ul>
        </div>
    </div>
@endsection
