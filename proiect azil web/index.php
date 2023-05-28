<?php

session_start();

if(isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user_web
            WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];


    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    
    <style>
        body {
            background-image: url('happy.jpg');
            background-size: cover;
            background-position: center;
        }
         p a {
        color: white;
        background-color: #4CAF50;
        border: none;
        padding: 60px;
        border-radius: 40px;
        text-decoration: none;
        font-weight: bold;
    }
    
    /* Style the hover effect for the buttons */
    p a:hover {
        opacity: 0.8;
    }
    p {
      text-align: center;
    }
    
    .logout {
      position: absolute;
      bottom: 0;
      width: 100%;
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
        <footer>
      <p>&copy; 2023 My Company, Inc. All rights reserved.</p>
    </footer>
    
    <?php if (isset($user)): ?>
        
        <p>Salut, <?= htmlspecialchars($user["name"]) ?></p>
        
    <?php else: ?>
            
        <p><a href="login.php">Logare</a> sau <a href="signup.html">Inregistrare</a></p>
            
    <?php endif; ?>
    
</section>

<div class="logout">
  <?php if (isset($user)): ?>
    <p>
      <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        Sunt un admin. <a href="admin_crud.html">Admin CRUD</a>
      <?php else: ?>
        Sunt un user.<a href="show_clients.php">Vezi varstnicii cazati in camin</a>
      <?php endif; ?>
      <a href="logout.php">Log out</a>
    </p>
  <?php endif; ?>
</div>

</body>
</html>
    