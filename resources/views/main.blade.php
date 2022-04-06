@extends('layouts.header')

@section('content')

<h1>Hello World!</h1>
<a href="/categories">Categories</a>

@if(session()->has('success'))
	<p class="alert alert-success">{{ session()->get('success') }}</p>
@endif

@foreach($products as $product)
	@include('card', compact('product'))
@endforeach

@endsection