@extends('layout.app')

@section('content')
	<div class="box">
		<h1>Contact Information</h1>
		<p> Here is text to give email, phone, and github information. </p>
	</div>
@endsection

@section('sidebar')
	@parent
	<input width="20%" type="image" src="home_button.png"/ onclick="location.href = '/home';">
	<input width="20%" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input width="20%" type="image" src="about_button2.png"/ onclick="location.href = '/about';">
@endsection