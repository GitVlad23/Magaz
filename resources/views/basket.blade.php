@extends('layouts.header')

@section('content')

<h1>Basket</h1><br><br>

@if(session()->has('success'))
	<p class="alert alert-success">{{ session()->get('success') }}</p>
@endif

@if(session()->has('remove'))
	<p class="alert alert-warning">{{ session()->get('remove') }}</p>
@endif

	@foreach($order->products as $product)
		<div style="border-bottom: 2px solid black;">
			<br>
			
			<a href="{{ route('product', [$product->category->code, $product->code]) }}">{{ $product->name }}</a>
			<p>{{ $product->price }} Rub</p>
			<p>Total price: {{ $product->getPriceForCount() }} Rub</p>

			<p>{{ $product->pivot->count }}</p>

			<form action="{{ route('basket-remove', $product) }}" method="POST">
				@csrf

				<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>-</button>
			</form>

			<form action="{{ route('basket-add', $product) }}" method="POST">
				@csrf

				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>+</button>
			</form>

			<br>
		</div>
	@endforeach

	<br><br>

		<a href="{{ route('basket-place') }}" type="submit" class="btn btn-success">Get order</a>

	<p>Total order's price: {{ $order->getFullPrice() }} Rub</p>

@endsection