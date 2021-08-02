@extends('layout.app')

@section('content')
	<div class="container main">
		<div class="wrapper">
		
			<?php
				// Database credentials
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "todo";
				
				// Setting up connection
				$conn = mysqli_connect($servername, $username, $password, $database);
				
				// Check if connection is successful
				if($conn->connect_error) {
					die("There's been an error: " . $conn->connect_error);
				}
				
				// Querry the database, then save the querry
				$sql = "SELECT firstName, lastName, class, level, hp, age, height, description, path FROM characters, image WHERE imageID=id";
				$result = $conn->query($sql);
				
				// Retreive data from querry to display
				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						// Create display div and name div
						echo "<div class='display'> <div class='name'>";
						echo "<h1>" . $row['firstName'] . " " . $row['lastName'] . "</h1></div>";
						
						// Create image div
						echo "<div class='image'><img src='{$row['path']}' width='75%' height='75%'></div>";
						
						// Create content div
						echo "<div class='content'><ul>";
						echo "<li>Class: " . $row['class'];
						echo "<li>Level: " . $row['level'];
						echo "<li>Health: " . $row['hp'];
						echo "<li>Age: " . $row['age'];
						echo "<li>Height: " . $row['height'];
						echo "<li>Description: " . $row['description'];
						echo "</ul></div> </div>";
					}
				}
				else {
					echo "0 results found.";
				}
				
				mysqli_close($conn);
				
			?>
		
		</div>
		
    </div>
@endsection

@section('sidebar')
	@parent
	<input type="image" src="home.png"/ onclick="location.href = '/home';">
	<input type="image" src="contact.png"/ onclick="location.href = '/contact';">
	<input type="image" src="about.png"/ onclick="location.href = '/about';">
@endsection