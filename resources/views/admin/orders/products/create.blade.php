@extends('layouts.header')

@section('content')


	@isset($product)
		
		<h1>Edit product: {{ $product->name }}</h1>

		<br>

		<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
			@csrf

			@method('PUT')
			<input type="text" name="code" id="code" value="{{ $product->code }}"><br>
			<input type="text" name="name" id="name" value="{{ $product->name }}"><br>
			<input type="text" name="description" id="description" value="{{ $product->description }}"><br><br>

			<div class="input-group row">
				<label for="category_id" class="col-form-label">Category: </label>
				<div class="col-sm-2">
					<select name="category_id" id="category_id" class="form-control">
						@foreach($categories as $el)
							<option value="{{ $el->id }}"
								@isset($product)
									@if($product->category_id == $el->id)
										selected
									@endif
								@endisset
								>{{ $el->name }}</option>
						@endforeach
					</select>
				</div>
			</div><br>

			<div>
				<label for="image" class="col-form-label">Picture: </label>
				<div>
					<label class="btn btn-default btn-file"><input type="file" name="image" id="image"></label>
				</div>
			</div><br>

			<input type="text" name="price" id="price" value="{{ $product->price }}"><br><br>

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('products.index') }}" type="submit" class="btn btn-success">Back to products</a>

	@else

		<h1>Create new product</h1>

		<br>

		<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
			@csrf

			<input type="text" name="code" id="code" placeholder="Code"><br>
			<input type="text" name="name" id="name" placeholder="Name"><br>
			<input type="text" name="description" id="description" placeholder="Description"><br><br>

			<div class="input-group row">
				<label for="category_id" class="col-form-label">Category: </label>
				<div class="col-sm-2">
					<select name="category_id" id="category_id" class="form-control">
						@foreach($categories as $el)
							<option>{{ $el->name }}</option>
						@endforeach
					</select>
				</div>
			</div><br>

			<div>
				<label for="image" class="col-form-label">Picture: </label>
				<div>
					<label class="btn btn-default btn-file"><input type="file" name="image" id="image"></label>
				</div>
			</div><br>

			<input type="text" name="price" id="price"><br><br>

			<button type="submit" class="btn btn-primary">Save</button>
		</form>

		<br>

		<a href="{{ route('products.index') }}" type="submit" class="btn btn-success">Back to products</a>

	@endisset

@endsection