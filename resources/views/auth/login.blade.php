@extends('app')
@section('content')
    <h1>用户登录</h1>
    <hr />
    {!! Form::open(['url'=>'auth/login']) !!}
		<div class="form-group">
			{!! Form::label('email','邮箱:') !!}
		    {!! Form::email('email',null,['class'=>'form-control', 'placeholder' => '请输入邮箱']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','密码:') !!}
		    {!! Form::password('password',['class'=>'form-control', 'placeholder' => '请输入密码']) !!}
		</div>
		<div class="form-group">
		    {!! Form::submit('登录',['class'=>'btn btn-success form-control']) !!}
		</div>
		还未注册用户？<a href="/auth/register" rel="nofollow" target="">注册</a>
    {!! Form::close() !!}
@endsection