@extends('layout.app')

@section('content')
	<div class="box">
		<h1>About My Project</h1>
		<p>&ensp;When I was asked to work on this project, I had a few different ideas of what I wanted to do. But the one I kept going back to was this character display, even if it seemed a little silly at first. Once I started working on it, however, any worries I had melted away as I just enjoyed getting each piece to work with one another.</p>
		
		<p>&ensp;A majority of my time (minus setting up Laravel on my computer, that easily took nearly half of my total time) was spent on the page design, as it was one of the most important parts for me. Not to say that I neglected to focus on the database or pulling data from said database, but once I had that done I was able to really put all my attention on making the page look the way I wanted it to.</p>
		
		<p>&ensp;Now, at the end of this project, I'm very proud of how it turned out! There are still little details I wish I could fix, but if I spent time on every minor detail I'd never finish this. And yet, I'm still incredibly pleased and excited to show it off.</p>
		
		<h1>About Me</h1>
		<p>&ensp;As an undergraduate programmer working towards my Bachelors of Computer Science, I enjoyed this experience to stretch my artistic eye for design and my programming knowledge. I'm hopeful to continue to find ways to blend art and computer science together, as no matter what project I work on I will always follow high standards for how the final outcome appears.</p>
	</div>
@endsection

@section('sidebar')
	@parent
	<input class="btn" type="image" src="home_button.png"/ onclick="location.href = '/home';">
	<input class="btn" type="image" src="display_button.png"/ onclick="location.href = '/display';">
	<input class="btn" type="image" src="contact_button.png"/ onclick="location.href = '/contact';">
@endsection