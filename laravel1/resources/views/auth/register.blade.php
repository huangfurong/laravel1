@extends('personal')
@section('content')

    <div class="navbar-header">
        <a class="navbar-brand hidden-sm" >注册</a>
    </div>
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/register']) !!}
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
        <div class="form-group">
            {!! Form::label('password_confirmation','重新输入密码:') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('马上注册',['class'=>'btn btn-success form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@stop
