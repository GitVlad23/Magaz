@extends('layouts.header')

@section('content')

	<h1>Sign in</h1><br>

	<form action="{{ route('login_process') }}" method="POST">
		@csrf
		
		<input type="text" name="name" id="name" placeholder="Name"><br>
		<input type="text" name="email" id="email" placeholder="E-Mail"><br>
		<input type="password" name="password" id="password" placeholder="Password"><br><br>

		<button type="submit" class="btn btn-success">Sign in</button>
	</form>

	<a href="{{ route('register') }}">Don't have an account?</a>

@endsection