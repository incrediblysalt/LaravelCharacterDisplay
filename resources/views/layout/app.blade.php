<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Website</title>
		
		<style>
			.sidebar {
				max-width: 1160px;
				margin: auto;
				margin-bottom: -10px;
				min-height: 30px;
				padding: 10px;
				padding-bottom: 20px;
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
				max-width: 1160px;
				margin: auto;
			}
			
			.box {
				background-color: #FFA07A;
				border-radius: 25px;
				padding: 10px;
				padding-left: 15px;
				max-width: 1160px;
				margin: auto;
			}
			
			.display {
				background-image: linear-gradient(to bottom, #ffa785, #ba623f);
				left: 50%;
				top: 50%;
				padding: 10px;
				border-radius: 25px;
			}
			
			.name {
				display: flex;
				justify-content: center;
				align-items: center;
				font-size: max(1vw, 14px);
			}
			
			.image {
				display: flex;
				justify-content: center;
				align-items: center;
				margin-top: -5px;
				padding: 10px;
				padding-bottom: 0px;
			}
			
			.image img {
				max-width: 100%;
				height: auto;
			}
			
			.content {
				padding-top: 1px;
				padding-bottom: 1px;
			}
			
			.display h1 {
				color: #474747;
				border-bottom: 1px solid black;
				padding-bottom: 10px;
			}
			
			.btn {
				width: 145px;
				min-width: 20%;
				max-width: 100%;
			}
			
			body {
				font-family: 'Trebuchet MS', sans-serif;
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