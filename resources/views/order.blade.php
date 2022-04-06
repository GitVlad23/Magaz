@extends('layouts.header')

@section('content')

	<h1>Confirm your order</h1>

	<p>Total order's price: {{ $order->getFullPrice() }} Rub</p>

	<form action="{{ route('basket-confirm') }}" method="POST">
		@csrf

		<label for="name">Name: </label>
		<div>
			<input type="text" name="name" id="name" value="Name">
		</div><br>

		<label for="phone">Phone: </label>
		<div>
			<input type="text" name="phone" id="phone" value="Phone">
		</div><br>

		<button type="submit" class="btn btn-success">Confirm the order</button>
	</form>	

@endsection