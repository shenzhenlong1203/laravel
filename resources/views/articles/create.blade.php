@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    <hr />
    {!! Form::open(['url'=>'article/store']) !!}
       <div class="form-group">
       	    {!! Form::label('title','标题:') !!}
       	    {!! Form::text('title',null,['class'=>'form-control', 'placeholder' => '请添加标题']) !!}
	   </div>
	    <div class="form-group">
       	    {!! Form::label('introduction','简介:') !!}
       	    {!! Form::text('introduction',null,['class'=>'form-control', 'placeholder' => '请添加简介']) !!}
	   </div>
	   <div class="form-group">
	        {!! Form::label('content','正文:') !!}
	        {!! Form::textarea('content',null,['class'=>'form-control', 'placeholder' => '请添加正文']) !!}
	   </div>
		<div class="form-group">
			{!! Form::label('published_at','发布时间:') !!}
			{!! Form::input('date','published_at', date('Y-m-d'),['class'=>'form-control']) !!}
		</div>
	   <div class="form-group">
	        {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
	   </div>
    {!! Form::close() !!}
@endsection