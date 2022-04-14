@extends('layouts.header')

@section('content')

	<h1>Products</h1>

	<br>

	@foreach($products as $el)
	<div class="panel" style="border-bottom: 2px solid black;">
		<p>Product name: {{ $el->name }}</p>

  		<a href="{{ route('products.show', $el->id) }}">Open</a>
		<a href="{{ route('products.edit', $el->id) }}">Edit</a>
		
		<form action="{{ route('products.destroy', $el->id) }}" method="POST">
			@csrf

			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</a>
		</form>
	</div>
	@endforeach

	<br><br>

	<a href="{{ route('products.create') }}" type="submit" class="btn btn-primary">Create new product</a>

	<a href="{{ route('admin_index') }}" type="submit" class="btn btn-success">Back to panel</a>

@endsection