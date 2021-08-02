@extends('layout.app')

@section('content')
	<div class="container main">
        <h3>Home page :)</h3>
    </div>
@endsection

@section('sidebar')
	@parent
	<input type="image" src="home.png"/ onclick="location.href = '/display';">
	<input type="image" src="contact.png"/ onclick="location.href = '/contact';">
	<input type="image" src="about.png"/ onclick="location.href = '/about';">
@endsection