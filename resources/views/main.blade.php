@extends('layouts.header')

@section('content')

<h1>Hello World!</h1>
<a href="/categories">Categories</a>

@foreach($products as $product)
	@include('card', compact('product'))
@endforeach

@endsection