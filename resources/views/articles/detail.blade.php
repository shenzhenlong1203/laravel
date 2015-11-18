@extends('app')
@section('content')
	<h1> {{ $article->title }}</h1>
	<p> {{ $article->introduction }}</p>
	<hr />
	<p> {{ $article->content }}</p>
	<hr />
	<p> {{ $article->published_at }}</p>
	
@endsection 