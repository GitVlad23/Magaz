@extends('layouts.header')

@section('content')

	<h1>Sign up</h1><br>

	<form action="{{ route('register_process') }}" method="POST">
		@csrf
		

		<input type="text" name="name" id="name" placeholder="Name">Name</input><br>

		<input type="text" name="email" id="email" placeholder="E-Mail">E-Mail</input><br>

		<input type="password" name="password" id="password" placeholder="Password">Password</input><br>

		<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">Password confirmation</input><br><br>


		<button type="submit" class="btn btn-success">Sign up</button>
	</form>

	<a href="{{ route('login') }}">Have an account?</a>

@endsection