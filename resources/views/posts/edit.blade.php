@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                    <div class="panel-heading">编辑文章</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>编辑失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ route('posts.update',$post->id) }}" method="POST">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{ $post->title }}">
                            <br>
                            <textarea name="content" rows="10" class="form-control" required="required" placeholder="请输入内容">{{ $post->content }}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info">提交修改</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
