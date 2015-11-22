@extends('app')
@section('content')
	<!-- @if ($errors->any())
	<ul class="list-group">
		@foreach ($errors->all() as $error) 
			<li class="list-group-item list-group-item-danger"> {{ $error }}</li>
		@endforeach
	</ul>
	@endif -->
    <h1>撰写文章</h1>
    <hr />
    {!! Form::open(['url'=>'article']) !!}
       @include('articles.form')
    {!! Form::close() !!}

@endsection