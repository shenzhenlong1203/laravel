@extends('app')
@section('content')
@foreach ($articles as $article) 
	<a href="article/{{ $article->id }}"><h1> {{ $article->title }}</h1></a>
	<p> {{ $article->introduction }}</p>
	<hr />
@endforeach

@endsection 