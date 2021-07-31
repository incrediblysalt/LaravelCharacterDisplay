<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Website</title>
	</head>
	<body>
		@yield('content')
		
		@section('sidebar')
			<div class="sidebar">
				<h3>Sidebar</h3>
				<p>This is the sidebar</p>
				@show
			</div>
	</body>
</html>