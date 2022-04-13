@extends('layouts.header')

@section('content')


	@isset($category)
		
		<h1>Edit category: {{ $category->name }}</h1>

		<br>

		<form action="{{ route('categories.update', $category->id) }}" method="POST">
			@csrf

			@method('PUT')
			<input type="text" name="code" id="code" value="{{ $category->code }}">
			<input type="text" name="name" id="name" value="{{ $category->name }}">
			<input type="text" name="description" id="description" value="{{ $category->description }}">

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Back to categories</a>

	@else

		<h1>Create new category</h1>

		<br>

		<form action="{{ route('categories.store') }}" method="POST">
			@csrf

			<input type="text" name="code" id="code" placeholder="Code">
			<input type="text" name="name" id="name" placeholder="Name">
			<input type="text" name="description" id="description" placeholder="Description">

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Back to categories</a>

	@endisset

@endsection