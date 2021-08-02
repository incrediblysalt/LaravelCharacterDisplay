@extends('layout.app')

@section('content')
	<h1>About Us</h1>
	
@endsection

@section('sidebar')
	@parent
	<input type="image" src="home.png"/ onclick="location.href = '/home';">
	<input type="image" src="home.png"/ onclick="location.href = '/display';">
	<input type="image" src="contact.png"/ onclick="location.href = '/contact';">
@endsection