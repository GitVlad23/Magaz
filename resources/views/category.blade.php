@extends('layouts.header')

@section('content')

<h1>{{ $category->name }} ({{ $category->products->count() }})</h1><br><br>

	@foreach($category->products as $product)
		@include('card', compact('product'))
	@endforeach

@endsection