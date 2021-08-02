<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Website</title>
		
		<style>
			.sidebar {
				background-image: url("test.png");
				width: 350px;
				margin-bottom: 10px;
				padding: 10px;
			}
			
			.wrapper {
				background-color: #FFA07A;
				display: grid;
				grid-template-columns: 1fr 1fr;
				left: 50%;
				top: 50%;
				padding: 10px;
				grid-gap: 20px;
				border-radius: 25px;
			}
			
			.display {
				background-color: #95d0f5;
				left: 50%;
				top: 50%;
				padding: 10px;
				border-radius: 25px;
			}
			
			.name {
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			.image {
				display: flex;
				justify-content: center;
				align-items: center;
				margin-top: -5px;
			}
			
			.content {
				padding-top: 1px;
				padding-bottom: 1px;
			}
			
			ul {
				padding-left: 12%;
			}
			
			.display h1 {
				color: #474747;
				border-bottom: 1px solid black;
				padding-bottom: 10px;
			}
		</style>
	</head>
	<body>
		@section('sidebar')
			<div class="sidebar">
				@show
			</div>
			
		@yield('content')
	</body>
</html>