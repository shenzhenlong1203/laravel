@extends('app')
@section('content')
    <h1>用户注册</h1>
    <hr />
    {!! Form::open(['url'=>'auth/register']) !!}
    	<div class="form-group">
			{!! Form::label('name','用户名:') !!}
		    {!! Form::text('name',null,['class'=>'form-control', 'placeholder' => '请输入用户名']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','邮箱:') !!}
		    {!! Form::email('email',null,['class'=>'form-control', 'placeholder' => '请输入邮箱']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','密码:') !!}
		    {!! Form::password('password',['class'=>'form-control', 'placeholder' => '请输入密码']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password_confirmation','确认密码:') !!}
		    {!! Form::password('password_confirmation',['class'=>'form-control', 'placeholder' => '请输入确认密码']) !!}
		</div>
		<div class="form-group">
		    {!! Form::submit('注册',['class'=>'btn btn-success form-control']) !!}
		</div>
    {!! Form::close() !!}
@endsection