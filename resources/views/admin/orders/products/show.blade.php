@extends('layouts.header')

@section('content')

	<h1>Product: {{ $product->name }}</h1> 

	<br>

	<h3>ID: {{ $product->id }}</h3>
	<h3>Code: {{ $product->code }}</h3>
	<h3>Description: {{ $product->description }}</h3>
	<h3>Image: <img src="{{ Storage::url($product->image) }}" height="240px"></h3>
	<h3>Price: {{ $product->price }}</h3>

	<br>

	<a href="{{ route('products.index') }}" type="submit" class="btn btn-success">Back to products</a>

@endsection