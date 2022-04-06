@extends('layouts.header')

@section('content')

	<h1>Categories</h1>

	@foreach($categories as $el)
	<div class="panel">
		<a href="{{ $el->code }}">{{ $el->name }}</a>
		<p>{{ $el->description }}</p>
	</div>
	@endforeach

	<form action="{{ route('main') }}" method="GET">
		<button type="submit" class="btn btn-success">Back to main</button>
	</form>

@endsection