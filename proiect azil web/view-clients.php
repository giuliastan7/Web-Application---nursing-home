<!DOCTYPE html>
<html>
<head>
    <title>Stergeti unul sau mai multi varstnici cazati</title>
    <link rel="stylesheet" href="style.css">
	<style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color:white;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: white;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
        h1{
            color:white;
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
	<h1>Stergeti unul sau mai multi varstnici cazati</h1>

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

        // Check if the "id" parameter is set, indicating that a client should be deleted
        if (isset($_GET['id'])) {
            // Prepare the SQL statement to delete the client with the specified ID
            $id = $_GET['id'];
            $sql = "DELETE FROM clients WHERE id = '$id'";

            // Execute the SQL statement and check if it was successful
            if ($conn->query($sql) === TRUE) {
                echo "Client deleted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Prepare the SQL statement to retrieve all clients from the database
        $sql = "SELECT * FROM clients";
        $result = $conn->query($sql);

        // Check if any clients were returned
        if ($result->num_rows > 0) {
            // Output a table of all clients, with a "Delete" button next to each one
            
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th></th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td><a href='view-clients.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No clients found.";
        }

        // Close the database connection
        $conn->close();
    ?>
</body>
</html>