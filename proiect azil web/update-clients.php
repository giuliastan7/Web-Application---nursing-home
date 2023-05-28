<!DOCTYPE html>
<html>
<head>
	<title>Update Clients</title>
	<link rel="stylesheet" href="style.css">
	<style>

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
}

h1 {
  color: white;
  text-align: center;
}
	</style>
</head>
<body>
<section class="header">
        
		<nav>
		<a href="home.html"><img src="images/logo.jpg"></a>
		<div class="nav-links">
			<i class="fa fa-times" ></i>
			<ul>
				<li><a href="home.html">ACASA</a></li>
				<li><a href="index.php">AUTENTIFICARE</a></li>
				<li><a href="lkista2.html">ANGAJATI</a></li>
				<li><a href="lista.html">TARIFE</a></li>
				<li><a href="contact.html">CONTACT</a></li>
			
			
			</ul>
			
		</div>
			<i class="fa fa-bars" ></i>
		</nav>
	<h1>Modificati date ale varstnicilor cazati</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th></th>
		</tr>

		<?php
		// Establish a connection to the database
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "giulia_bd";

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check if the connection was successful
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		// Check if the form has been submitted with updated client information
		if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
		    $id = $_POST['id'];
		    $name = $_POST['name'];
		    $email = $_POST['email'];
		    $phone = $_POST['phone'];

		    // Prepare the SQL statement to update the client with the specified ID
		    $sql = "UPDATE clients SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";

		    // Execute the SQL statement and check if it was successful
		    if ($conn->query($sql) === TRUE) {
		        echo "<div class='success'>Date modificate cu succes!</div>";
		    } else {
		        echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
		    }
		}

		// Retrieve all clients from the database
		$sql = "SELECT * FROM clients";
		$result = $conn->query($sql);

		// Check if any clients were found
		if ($result->num_rows > 0) {
		    // Output a table of all clients, with an "Update" button next to each one
		    while ($row = $result->fetch_assoc()) {
		        echo "<form method='post'>";
		        echo "<tr>";
		        echo "<td>" . $row["id"] . "</td>";
		        echo "<td><input type='text' name='name' value='" . $row["name"] . "'></td>";
		        echo "<td><input type='text' name='email' value='" . $row["email"] . "'></td>";
		        echo "<td><input type='text' name='phone' value='" . $row["phone"] . "'></td>";
		        echo "<td><input type='hidden' name='id' value='" . $row["id"] . "'><input type='submit' value='Update'></td>";
		        echo "</tr>";
		        echo "</form>";
		    }
		} else {
		    echo "No clients found.";
		}

		// Close the database connection
		$conn->close();
		?>
	</table>
</body>
</html>