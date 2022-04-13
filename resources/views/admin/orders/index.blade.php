@extends('layouts.header')

@section('content')

	<h1>Orders</h1>

	<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Categories</a>

	@foreach($orders as $el)
	<div class="panel" style="border-bottom: 2px solid black;">
		<p>ID: {{ $el->id }}</p>
		<p>Orderer's name: {{ $el->name }}</p>
		<p>Orderer's phone: {{ $el->phone }}</p>
		<p>Created at: {{ $el->created_at->format('H:i (d/m/Y)') }}</p>
	</div>
	@endforeach

	<a href="{{ route('admin_logout') }}" type="submit" class="btn btn-success">Logout and back to main</a>

@endsection