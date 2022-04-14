<div style="border-top: 2px solid black">
	<h2>{{ $product->name }}</h2>
	<p>{{ $product->price }} Rub</p>
	<h5>{{ $product->category->name }}a</h5a>
	<p>{{ $product->description }}</p>
	<h5><img src="{{ Storage::url($product->image) }}" height="120px"></h5>

	<form action="{{ route('basket-add', $product) }}" method="POST">
		@csrf

		<button type="submit" class="btn btn-primary" role="button">To basket</button>

		<a href="{{ route('product', [$product->category->code, $product->code]) }}">About</a>
	</form>
</div>

<br><br> 