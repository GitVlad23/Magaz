@extends('layouts.header')

@section('content')

<h1>Hello, 
	@guest('web') World! @endguest
	@auth('web'){{ $user = auth()->user()->name; }}!@endauth
</h1>



@guest('web')
	<a href="{{ route('admin_login') }}" type="submit" class="btn btn-danger">Admin Panel</a>
	<a href="{{ route('login') }}" type="submit" class="btn btn-success">Sing in</a>
	<a href="{{ route('register') }}" type="submit" class="btn btn-primary">Sing up</a>
@endguest

@auth('web')
	<a href="{{ route('logout') }}" type="submit" class="btn btn-primary">Logout</a>
	<a href="{{ route('basket') }}" type="submit" class="btn btn-success">Basket</a>
	<a href="{{ route('person.orders.index') }}" type="submit" class="btn btn-success">My orders</a><br><br>
@endauth


<a href="/categories">Categories</a><br><br>


<h2>All products:</h2><br>

@if(session()->has('success'))
	<p class="alert alert-success">{{ session()->get('success') }}</p>
@endif

@if(session()->has('warning'))
	<p class="alert alert-success">{{ session()->get('warning') }}</p>
@endif

@foreach($products as $product)
	@include('card', compact('product'))
@endforeach

@endsection