@extends('personal')
@section('content')

    <div class="navbar-header">
        <a class="navbar-brand hidden-sm">登录</a>
    </div>
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/login']) !!}
        <div class="form-group">
            {!! Form::label('name','用户名:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','邮箱:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','密码:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div>
            <input type="checkbox" name="remember"> 记住我
        </div>
        <div class="form-group">
            {!! Form::submit('马上登录',['class'=>'btn btn-success form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>


@stop
