@extends('app')

@section('content')
	<h1>{{ $articles->title }}</h1>
	<article>
		{{ $articles->body }}
	</article>
	
@endsection