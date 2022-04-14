@extends('layouts.header')

@section('content')


	@isset($category)
		
		<h1>Edit category: {{ $category->name }}</h1>

		<br>

		<form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
			@csrf

			@method('PUT')
			<input type="text" name="code" id="code" value="{{ $category->code }}"><br>
			<input type="text" name="name" id="name" value="{{ $category->name }}"><br>
			<input type="text" name="description" id="description" value="{{ $category->description }}"><br><br>

			<div>
				<label for="image" class="col-form-label">Picture: </label>
				<div>
					<label class="btn btn-default btn-file"><input type="file" name="image" id="image"></label>
				</div>
			</div><br>

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Back to categories</a>

	@else

		<h1>Create new category</h1>

		<br>

		<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
			@csrf

			<input type="text" name="code" id="code" placeholder="Code"><br>
			<input type="text" name="name" id="name" placeholder="Name"><br>
			<input type="text" name="description" id="description" placeholder="Description"><br><br>

			<div>
				<label for="image" class="col-form-label">Picture: </label>
				<div>
					<label class="btn btn-default btn-file"><input type="file" name="image" id="image"></label>
				</div>
			</div><br>

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Back to categories</a>

	@endisset

@endsection