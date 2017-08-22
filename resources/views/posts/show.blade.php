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

                    <div id="content" style="margin: 20px;">
                        <p>
                            {!! $post->content !!}
                        </p>
                    </div>

                    <div style="text-align: right;">
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
                    <div id="new">
                        <form action="{{ route('comments.store') }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            @if (!(Auth::check()))
                                <div class="form-group">
                                    <label>Nickname</label>
                                    <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" style="width: 300px;">
                                </div>
                                <div class="form-group">
                                    <label>Home page</label>
                                    <input type="text" name="website" class="form-control" style="width: 300px;">
                                </div>
                            @endif
                            <div class="form-group">
                                <label>请输入评论:</label>
                                <textarea name="content" id="newFormContent" class="form-control" rows="5" required="required"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
                        </form>
                    </div>

                    <script>
                        function reply(a) {
                            var nickname = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
                            var textArea = document.getElementById('newFormContent');
                            textArea.innerHTML = '@'+nickname+' ';
                        }
                    </script>

                    <div class="conmments" style="margin-top: 100px;">
                        @foreach ($post->comments as $comment)

                            <div class="one" style="border-top: solid 20px #efefef; padding: 5px 20px;">
                                <div class="nickname" data="{{ $comment->nickname }}">
                                    @if ($comment->website)
                                        <a href="{{ $comment->website }}">
                                            <h4>{{ $comment->nickname }}</h4>
                                        </a>
                                    @else
                                        <h4>{{ $comment->nickname }}</h4>
                                    @endif
                                    <h6>{{ $comment->created_at->diffForHumans() }}</h6>
                                </div>
                                <div class="content">
                                    <p style="padding: 20px;">
                                        {{ $comment->content }}
                                    </p>
                                </div>
                                <div class="reply" style="text-align: right; padding: 5px;">
                                    <a href="#new" onclick="reply(this);">回复</a>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection