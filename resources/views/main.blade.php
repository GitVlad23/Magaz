@extends('layouts.header')

@section('content')

<h1>Hello, 
	@guest('web') World! @endguest
	@auth('web'){{ $user = auth()->user()->name; }}!@endauth
</h1>

<a href="{{ route('admin_login') }}" type="submit" class="btn btn-danger">Admin Panel</a>

<a href="{{ route('logout') }}" type="submit" class="btn btn-primary">Logout</a>

<a href="{{ route('login') }}" type="submit" class="btn btn-success">Sing in</a>
<a href="{{ route('register') }}" type="submit" class="btn btn-danger">Sing up</a>

<a href="{{ route('basket') }}" type="submit" class="btn btn-primary">Basket</a><br>

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