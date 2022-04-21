@extends('layouts.header')

@section('content')

	<h1>Orders</h1>

@auth('admin')
	<a href="{{ route('categories.index') }}" type="submit" class="btn btn-success">Categories</a>

	<a href="{{ route('products.index') }}" type="submit" class="btn btn-success">Products</a>
	
	<a href="{{ route('admin_logout') }}" type="submit" class="btn btn-danger">Logout and back to main</a>
@endauth

@auth('web')
	<a href="{{ route('main') }}" type="submit" class="btn btn-success">Back to main</a>
@endauth

	<br><br>

@auth('admin')
	@foreach($orders as $el)
	<div class="panel" style="border-bottom: 2px solid black;">
		<p>ID: {{ $el->id }}</p>
		<a href="{{ route('admin_order_show', $el) }}"><p>Orderer's name: {{ $el->name }}</p></a>
		<p>Orderer's phone: {{ $el->phone }}</p>
		<p>Created at: {{ $el->created_at->format('H:i (d/m/Y)') }}</p>
	</div>
	@endforeach
@endauth

@auth('web')
	@foreach($orders as $el)
	<div class="panel" style="border-bottom: 2px solid black;">
		<p>ID: {{ $el->id }}</p>
		<a href="{{ route('person.orders.show', $el) }}"><p>Orderer's name: {{ $el->name }}</p></a>
		<p>Orderer's phone: {{ $el->phone }}</p>
		<p>Created at: {{ $el->created_at->format('H:i (d/m/Y)') }}</p>
	</div>
	@endforeach
@endauth


@endsection