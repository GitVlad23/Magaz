@extends('layouts.header')

@section('content')

	<h1>Categories</h1>

	@foreach($categories as $el)
	<div class="panel" style="border-bottom: 2px solid black;">
		<p>Category name: {{ $el->name }}</p>

  		<a href="{{ route('categories.show', $el->id) }}">Open</a>
		<a href="{{ route('categories.edit', $el->id) }}">Edit</a>
		
		<form action="{{ route('categories.destroy', $el->id) }}" method="POST">
			@csrf

			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</a>
		</form>
	</div>
	@endforeach

	<br><br>

	<a href="{{ route('categories.create') }}" type="submit" class="btn btn-primary">Create new category</a>

	<a href="{{ route('admin_index') }}" type="submit" class="btn btn-success">Back to panel</a>

@endsection