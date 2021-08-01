@extends('layout.app')

@section('content')
	<h1>Contact Us</h1>
	<button type="button" onclick="location.href = '/home';">Back to Home</button>
@endsection

@section('sidebar')
	@parent
	<p>This is added to the sidebar</p>
@endsection