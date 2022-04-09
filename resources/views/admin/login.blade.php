@extends('layouts.header')

@section('content')

	<h1>Sign in</h1><br>

	<form action="{{ route('admin_login_process') }}" method="POST">
		@csrf
		

		<input type="text" name="email" id="email">E-Mail</input><br>

		<input type="password" name="password" id="password">Password</input><br><br>


		<button type="submit" class="btn btn-success">Sign in</button>
	</form>

@endsection