<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulation d'une base de données (à remplacer par une vraie base)
    $users = [
        'admin' => 'password',
    ];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: scan.php');
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
