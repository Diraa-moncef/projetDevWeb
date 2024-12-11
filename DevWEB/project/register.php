<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body background="img/BDO_Digital_Cyber_Security_LR.jpg" width="200" height="300">
    <div class="register-container">
        <form action="php/register.php" method="POST" id="registerForm">
            <h1>Register</h1>
            <label for="regUsername">Username:</label>
            <input type="text" name="username" id="regUsername" required>
            <label for="regPassword">Password:</label>
            <input type="password" name="password" id="regPassword" required>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required>
            <button type="submit">Register</button>
        </form>
        <p>Déjà inscrit ? <a href="index.php">Se connecter</a></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>