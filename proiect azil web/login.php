<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user_web
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">

    <style>
        body {
            background-image: url('happy.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input[type="email"], input[type="password"] {
            width: 300px;
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255,255,255,0.8);
        }
        
        button {
            padding: 10px 20px;
            margin: 100px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #3e8e41;
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
    
    <h1>Logare</h1>
    
    <?php if ($is_invalid): ?>
        <em>Datele introduse sunt gresite</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Parola</label>
        <input type="password" name="password" id="password">
        
        <button>Logare</button>
    </form>
    
</body>
</html>