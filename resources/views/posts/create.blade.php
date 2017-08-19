@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading">新增一篇文章</div>
                <div class="panel-body">
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                        <div class="form-group">
                        {!! Form::open(['url'=>route('posts.store')])!!}
                        {!! csrf_field() !!}
                        {!! Form::label('title','标题:') !!}
                        {!! Form::text('title',null,['class'=>'form-control','required'=>'required','placeholder'=>'请输入标题']) !!}
                        {!! Form::label('content','正文:') !!}
                        {!! Form::textarea('content',null,['class'=>'form-control','required'=>'required','placeholder'=>'请输入内容']) !!}<br/>
                            {!! Form::label('tag_list','选择标签') !!}
                            {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-tags','multiple'=>'multiple']) !!}

                            <br/><br/>
                            {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
                            {!! Form::close() !!}
                        </div>


                    {{--<form action="{{ route('posts.store') }}" method="POST">--}}
                    {{--{!! csrf_field() !!}--}}
                    {{--<input type="text" name="title" class="form-control" required="required" placeholder="请输入标题"><br>--}}
                    {{--<textarea name="content" rows="10" class="form-control" required="required" placeholder="请输入内容"></textarea><br>--}}
                    {{--<button class="btn btn-lg btn-info">新增文章</button>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $(".js-example-tags").select2({
                placeholder: "添加标签"
            });
        });
    </script>
@endsection
