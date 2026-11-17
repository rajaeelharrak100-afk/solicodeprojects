
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog Personnel</title>
    <link rel="stylesheet" href="dossier-depart/css/style.css">
</head>
<body>

    <section id="articles" class="section-articles">
        <div class="conteneur-articles">

            <section class="filtre-categories">
                <h2>Explorer par thème</h2>

                <div class="liste-filtres">

                    <a href="index.php" class="pilule-filtre actif">
                        Tous les articles
                    </a>

                    <?php foreach ($categories as $cat): ?>
                        <a href="categorie.php?id=<?= $cat['id'] ?>" class="pilule-filtre">
                            <?= htmlspecialchars($cat['libelle']) ?>
                        </a>
                    <?php endforeach; ?>

                </div>
            </section>

            <div class="entete-liste-articles">
                <div>
                    <h2>Dernières publications</h2>
                    <p>Les articles les plus récents de la communauté.</p>
                </div>
            </div>

            <div class="grille-articles">

                <?php foreach ($articles as $article): ?>

                    <div class="carte-article">

                        <a href="article.php?id=<?= $article['id'] ?>" class="carte-image">
                            <img src="<?= htmlspecialchars($article['image']) ?>"
                                 alt="<?= htmlspecialchars($article['titre']) ?>">
                        </a>

                        <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                            <?= htmlspecialchars($article['categorie_libelle']) ?>
                        </span>

                        <div class="carte-contenu">

                            <?php if ($article['id'] == 1): ?>
                                <small class="badge-special">⭐ À la une</small>
                            <?php endif; ?>

                            <h3>
                                <a href="article.php?id=<?= $article['id'] ?>">
                                    <?= htmlspecialchars($article['titre']) ?>
                                </a>
                            </h3>

                            <p>
                                <?= htmlspecialchars(mb_substr($article['contenu'], 0, 100)) ?>...
                            </p>

                            <div class="carte-meta">
                                <span><?= date('d M Y', strtotime($article['date_creation'])) ?></span>
                                <span>5 min</span>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

</body>
</html>
