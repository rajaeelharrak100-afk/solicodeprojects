<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Dynamique</title>
    <link rel="stylesheet" href="dossier-depart/css/style.css">
</head>
<body>
    <header class="site-header">
        <h1>Mon Blog PHP</h1>
        <p>Découvrez nos derniers articles et actualités</p>
    </header>

    <main class="container">
        <section class="grille-articles">
            <?php foreach ($articles as $article): ?>
                <article class="carte">
                    <div class="carte-image">
        <img src="<?= htmlspecialchars($article['image']) ?>"
             alt="<?= htmlspecialchars($article['titre']) ?>">
    </div>

                    <div class="carte-header">
                        <!-- Affichage conditionnel de la couleur de l'étiquette -->
                        <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                            <?= htmlspecialchars($article['categorie_libelle']) ?>
                        </span>
                    </div>
                    
                    <div class="carte-contenu">
                        <!-- Badge conditionnel « À la une » si l'id est égal à 1 -->
                        <?php if ($article['id'] == 1): ?>
                            <small class="badge-special">⭐ À la une</small>
                        <?php endif; ?>

                        <h3><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['titre']) ?></a></h3>
                        <p><?= htmlspecialchars(mb_substr($article['contenu'], 0, 100)) ?>...</p>
                        
                        <div class="carte-meta">
                            <span><?= date('d M Y', strtotime($article['date_creation'])) ?></span>
                            <span>5 min</span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 - Mon Blog PHP. Tous droits réservés.</p>
    </footer>
</body>
</html>