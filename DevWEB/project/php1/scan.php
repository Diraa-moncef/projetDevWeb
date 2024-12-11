<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];
    echo "Scanning URL: $url\n";

    // Exemple de reconnaissance (nslookup)
    $output = shell_exec("nslookup $url");
    echo $output;
}
?>
