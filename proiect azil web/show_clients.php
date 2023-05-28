<!DOCTYPE html>
<html>
<head>
	<title>List of Clients</title>
	<link rel="stylesheet" href="style.css">
	<style>
	table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: auto;
  background-color: white;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}



tr:hover {
  background-color: #ddd;
}
h1 {
  color: white;
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
		<footer>
      <p>&copy; 2023 My Company, Inc. All rights reserved.</p>
    </footer>
	<h1>Lista varstnicilor cazati in camin</h1>
	<table>
		<tr>
			<th>Nume</th>
			<th>Email</th>
			<th>Telefon</th>
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

		// Prepare the SQL statement to select all clients from the database
		$sql = "SELECT * FROM clients";

		// Execute the SQL statement
		$result = $conn->query($sql);

		// Loop through the results and output each client
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
		    }
		} else {
		    echo "0 results";
		}

		// Close the database connection
		$conn->close();
		?>
	</table>
</body>
</html>







