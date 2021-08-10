@extends('layout.app')

@section('content')
	<div class="box">
		<h1>Contact Information</h1>
		<p>&ensp;If you'd like to contact me, you can find various methdods below:</p>
		<div class="image" style="justify-content:left; margin-top: -20px;">
			<img src="at2.png" width=40px>
			<h3>&ensp;18bsavage@gmail.com</h3>
		</div>
		<div class="image" style="justify-content:left; margin-top: -20px;">
			<img src="phone4.png" width=40px>
			<h3>&ensp;(801) 870-4706</h3>
		</div>
		<div class="image" style="justify-content:left; margin-top: -15px;">
			<img src="git2.png" width=40x>
			<h3>&ensp;incrediblysalt</h3>
		</div>
	</div>
@endsection

@section('sidebar')
	@parent
	<input class="btn" type="image" src="home_button.png"/ onclick="location.href = '/home';">
	<input class="btn" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input class="btn" type="image" src="about_button2.png"/ onclick="location.href = '/about';">
@endsection