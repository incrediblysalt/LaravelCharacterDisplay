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
						echo "<div class='image'><img src='{$row['path']}' style='border: 5px solid white;'></div>";
						
						// Create content div
						echo "<div class='content'><ul>";
						echo "<li><span style='font-weight: bold;'>Class:</span> " . $row['class'];
						echo "<li><span style='font-weight: bold;'>Level:</span> " . $row['level'];
						echo "<li><span style='font-weight: bold;'>Health:</span> " . $row['hp'];
						echo "<li><span style='font-weight: bold;'>Age:</span> " . $row['age'];
						echo "<li><span style='font-weight: bold;'>Height:</span> " . $row['height'];
						echo "<li><span style='font-weight: bold;'>Description:</span> ";
						
						$fh = fopen($row['description'],'r');
						while ($line = fgets($fh)) {
							echo ($line);
						}
						fclose($fh);
						
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
	<input width="20%" type="image" src="home_button.png"/ onclick="location.href = '/home';">
	<input width="20%" type="image" src="contact_button.png"/ onclick="location.href = '/contact';">
	<input width="20%" type="image" src="about_button2.png"/ onclick="location.href = '/about';">
@endsection