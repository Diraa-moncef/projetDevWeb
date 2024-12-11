<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<body background="img/BDO_Digital_Cyber_Security_LR.jpg" width="200" height="300">
    <div class="login-container">
        <form action="php/auth.php" method="POST" id="loginForm">
            <h1>Login</h1>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Pas encore inscrit ? <a href="register.php">Créer un compte</a></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>