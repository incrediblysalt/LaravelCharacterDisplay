@extends('layout.app')

@section('content')
	<div class="container main">
        <h3>Showing Images from database</h3>
        
		<?php
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "todo";
			
			$conn = mysqli_connect($servername, $username, $password, $database);
			
			if($conn->connect_error) {
				die("There's been a FUCKY WUCKY: " . $conn->connect_error);
			}
			
			echo "Connected successfully :D <br>";
			
			$sql = "SELECT firstName, lastName, path FROM characters, image WHERE imageID=id";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
					echo "<img src='{$row['path']}' width='500' height='250'>";
					echo "<br>";
				}
			}
			else {
				echo "0 results found.";
			}
			
			mysqli_close($conn);
			
		?>
		
    </div>
@endsection

@section('sidebar')