<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simuler l'ajout dans une base de données
    file_put_contents('users.txt', "$username:$password\n", FILE_APPEND);
    echo "Inscription réussie ! <a href='../index.php'>Se connecter</a>";
}
?>

