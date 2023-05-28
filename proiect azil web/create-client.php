<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adaugati un batranel</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: white;
      }
      h1 {
        margin-bottom: 20px;
      }
      form {
        max-width: 500px;
        margin: 0 auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type=text], input[type=email], input[type=tel] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        box-sizing: border-box;
        font-size: 14px;
      }
      input[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type=submit]:hover {
        background-color: #3e8e41;
      }
      .error {
        color: red;
        margin-top: 10px;
      }
      .success {
        color: green;
        margin-top: 10px;
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
		<h1>Adaugati un varstnic</h1>
    
    <form method="post" action="">
      <label for="name">Nume:</label>
      <input type="text" name="name" id="name" required>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
      <label for="phone">Telefon:</label>
      <input type="tel" name="phone" id="phone" required>
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

      // Check if the form has been submitted
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Prepare the SQL statement to insert the new client into the database
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];

          $sql = "INSERT INTO clients (name, email, phone) VALUES ('$name', '$email', '$phone')";

          // Execute the SQL statement and check if it was successful
          if ($conn->query($sql) === TRUE) {
              echo '<p class="success">Varstnic adaugat cu succes!</p>';
          } else {
              echo '<p class="error">Error: ' . $sql . '<br>' . $conn->error . '</p>';
          }
      }

      // Close the database connection
      $conn->close();
      ?>
      <input type="submit" value="Create">
    </form>
  </body>
</html>