@extends('layout.app')

@section('content')
	<div class="box">
		<h1>About Me</h1>
		<p> Here is text to describe why I wanted to make this project (or why I spent time on what I did), my process, and how I feel with it done!</p>
		<p> Here is text to talk about my education, experience, and goals. </p>
	</div>
@endsection

@section('sidebar')
	@parent
	<input width="20%" type="image" src="home_button.png"/ onclick="location.href = '/home';">
	<input width="20%" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input width="20%" type="image" src="contact_button.png"/ onclick="location.href = '/contact';">
@endsection