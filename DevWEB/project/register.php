<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body background="/home/ipiipi/Downloads/BDO_Digital_Cyber_Security_LR.jpg" withd="300" height="200">
    <div class="register-container">
        <form action="register.html" method="POST" id="registerForm">
            <img src="/home/ipiipi/Desktop/pngtree-computer-hacker-png-image_12507615-removebg-preview.png" width="50%" height="50%" alt="logo SafeZone">
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
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simuler l'ajout dans une base de données
    file_put_contents('users.txt', "$username:$password\n", FILE_APPEND);
    echo "Inscription réussie ! <a href='index.php'>Se connecter</a>";
}
?>
</body>
</html>