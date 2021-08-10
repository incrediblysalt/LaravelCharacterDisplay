@extends('layout.app')

@section('content')
	<div class="box">
		<h1>Welcome to Berkeley's Character Display Page!</h1>
		<p> Here is some text to talk about what this page is for, how it demonstrates certain skills (database creation/data insertion, pulling data from said database to display on a page, and page design). </p>
		<p> Here is more text talking about going to display via display button, contact via contact button, and about via about button. </p>
	</div>
@endsection

@section('sidebar')
	@parent
	<input width="20%" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input width="20%" type="image" src="contact_button.png"/ onclick="location.href = '/contact';">
	<input width="20%" type="image" src="about_button2.png"/ onclick="location.href = '/about';">
@endsection