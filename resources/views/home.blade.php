@extends('layout.app')

@section('content')
	<div class="box">
		<h1>Welcome to Berkeley's Character Display Page!</h1>
		<p>&ensp;I've compiled this page because, while I do enjoy talking about my characters, I have some new skills I've learned about to demonstrate and show off. From database creation to pulling data from said database to display on a page, each part of this project, no matter how small, I've poured all my attention into to make it the best it can be.</p>
		
		<p>&ensp;To view the display page, feel free to select the button at the top of the page, or you can even click <a href="/display">here</a> to visit it as well. On the display page, you'll see where I'm pulling data from a database holding my character information, which is displayed in a grid format to fit each character.</p>
		
		<p>&ensp;To view the contact page, feel free to select the button at the top of the page, or you can access it <a href="/contact">here</a>.</p>
		
		<p>&ensp;To view the about page, feel free to select the button at the top of the page, or you can access it <a href="/about">here</a>.</p>
		
		<p>&ensp;Thanks for exploring my project, I hope you enjoy your stay!</p>
	</div>
@endsection

@section('sidebar')
	@parent
	<input class="btn" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input class="btn" type="image" src="about_button2.png"/ onclick="location.href = '/about';">
	<input class="btn" type="image" src="contact_button.png"/ onclick="location.href = '/contact';">
@endsection