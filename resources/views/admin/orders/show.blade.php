@extends('layouts.header')

@section('content')

	<h1>Category: {{ $category->name }}</h1> 

	<br>

	<h3>ID: {{ $category->id }}</h3>
	<h3>Code: {{ $category->code }}</h3>
	<h3>Description: {{ $category->description }}</h3>
	<h3>Products amount: {{ $category->products()->count() }}</h3>

	<br>

	<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Back to categories</a>

@endsection