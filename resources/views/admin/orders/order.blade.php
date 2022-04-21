@extends('layouts.header')

@section('content')

	<h1>Order: {{ $order->name }}</h1> 

	<br>

	@foreach($order->products as $el)
		<a href="{{ route('product', $el->id) }}"></a>
		<h1>{{ $el->name }}</h1>
		<img src="{{ Storage::url($el->image) }}">
		<h3>Total for the same product {{ $el->getPriceForCount() }} Rub</p>
	@endforeach

	<h1>Total: {{ $order->getFullPrice() }} Rub</h3>

	<br>

	<a href="{{ route('person.orders.index') }}" type="submit" class="btn btn-success">Back to orders</a>

@endsection