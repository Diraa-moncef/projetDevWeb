
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Test OWASP</title>
</head>
<body>
    <h1>OWASP Vulnerability Tester</h1>
    <form action="" method="POST">
        <label for="url">Entrez une URL pour analyser :</label>
        <input type="url" id="url" name="url" placeholder="https://example.com" required>
        <button type="submit">Tester</button>
    </form>
</body>
</html><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = filter_var($_POST['url'], FILTER_VALIDATE_URL);
    if (!$url) {
        die("URL invalide !");
    }

    // Fonction pour récupérer les en-têtes de sécurité
    function getSecurityHeaders($url) {
        $headers = @get_headers($url, 1);
        $requiredHeaders = [
            'Content-Security-Policy' => 'Protège contre les attaques XSS.',
            'Strict-Transport-Security' => 'Force l’utilisation de HTTPS.',
            'X-Frame-Options' => 'Empêche le clickjacking.',
            'X-Content-Type-Options' => 'Empêche le sniffing MIME.',
            'Referrer-Policy' => 'Limite les données du référant.',
            'Permissions-Policy' => 'Restreint les permissions des fonctionnalités du navigateur.',
        ];

        $results = [];
        foreach ($requiredHeaders as $header => $desc) {
            $results[$header] = [
                'status' => isset($headers[$header]) ? 'Present' : 'Missing',
                'value' => $headers[$header] ?? 'N/A',
                'description' => $desc,
            ];
        }

        return $results;
    }

    // Fonction pour analyser robots.txt
    function checkRobotsTxt($url) {
        $robotsUrl = rtrim($url, '/') . '/robots.txt';
        $content = @file_get_contents($robotsUrl);
        if ($content) {
            return nl2br(htmlspecialchars($content));
        }
        return "Aucun fichier robots.txt trouvé.";
    }

    // Fonction simple pour tester l'injection SQL (en GET)
    function testSQLInjection($url) {
        $testUrl = $url . "?id=1' OR '1'='1";
        $response = @file_get_contents($testUrl);

        if ($response && strpos($response, 'syntax') !== false) {
            return "Vulnérable à l'injection SQL.";
        }
        return "Semble sécurisé contre l'injection SQL.";
    }

    // Appels des fonctions
    echo "<h2>Analyse des en-têtes de sécurité</h2>";
    $headers = getSecurityHeaders($url);
    foreach ($headers as $header => $info) {
        echo "<strong>$header:</strong> {$info['status']}<br>";
        echo "Description: {$info['description']}<br>";
        echo "Valeur: {$info['value']}<br><br>";
    }

    echo "<h2>Analyse du fichier robots.txt</h2>";
    echo checkRobotsTxt($url);

    echo "<h2>Test d'injection SQL</h2>";
    echo testSQLInjection($url);
}
?>