
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Personnel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1><?= htmlspecialchars($article['titre']) ?></h1>
    </header>

    <main>
        <p><?= htmlspecialchars($article['contenu']) ?></p>
    </main>

    <footer>
        <p>© 2026 Mon Blog Personnel.</p>
    </footer>

</body>
</html>
