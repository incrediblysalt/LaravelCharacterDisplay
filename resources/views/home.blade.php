@extends('layout.app')

@section('content')
	<div class="container main">
        <h3>Home page :)</h3>
		
		<button type="button" onclick="location.href = '/display';">To Display</button>
		<button type="button" onclick="location.href = '/contact';">To Contact</button>
		<button type="button" onclick="location.href = '/about';">To About</button>
    </div>
@endsection

@section('sidebar')