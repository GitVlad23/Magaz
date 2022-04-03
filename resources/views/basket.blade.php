@extends('layouts.header')

@section('content')

<h1>Basket</h1><br><br>

	@foreach($order->products as $product)
		<a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a>
		<p>{{ $product->price }} Rub</p>

			<a href="#"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>

		<form action="{{ route('basket-add', $product) }}" method="POST">
			@csrf

			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
		</form>
	@endforeach

@endsection