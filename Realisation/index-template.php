
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= afficherNomSite($siteName) ?> - <?= $pageTitle ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navigation -->

    <header>
        <div class="container navbar">

            <a href="#accueil" class="logo">
                ClariMind<span>.</span>
            </a>

            <nav>
                <ul>

                    <?php foreach ($menu as $item): ?>

                        <li>
                            <a href="<?= $item["link"] ?>">
                                <?= $item["name"] ?>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </nav>

        </div>
    </header>


    <!-- Section principale -->

    <main>

        <section class="hero" id="accueil">

            <div class="container hero-content">

                <div class="hero-text">

                    <p class="small-title">
                        BIENVENUE SUR CLARIMIND
                    </p>

                    <h1>
                        Chaque esprit est unique.
                        <span>Comprenons-le.</span>
                    </h1>

                    <p>
                        Le TDAH peut influencer notre façon de
                        penser, de nous concentrer et d'organiser
                        notre quotidien.

                        Ici, nous apprenons à mieux le comprendre,
                        simplement et sans jugement.
                    </p>

                    <a href="test.php" class="button">
                         Explorer mon esprit
                    </a>

                </div>


                <div class="hero-image">

                      <img src="brain.jpg" alt="Illustration du cerveau">

                </div>

            </div>

        </section>


        <!-- Présentation du TDAH -->

        <section class="section" id="tdah">

            <div class="container">

                <div class="section-title">

                    <p class="small-title">EN SAVOIR PLUS</p>

                    <h2>Qu'est-ce que le TDAH ?</h2>

                    <p>
                        Le trouble du déficit de l'attention
                        avec ou sans hyperactivité est un trouble
                        du neurodéveloppement.
                    </p>

                </div>


                <div class="info-box">

                    <h3>Comprendre sans juger</h3>

                    <p>
                        Le TDAH peut avoir un impact sur
                        l'attention, le comportement et
                        l'organisation de la vie quotidienne.
                        Il ne s'agit pas d'un manque de volonté.
                    </p>

                </div>


                <div class="remember-box">

                    <h3>Quelques informations à retenir</h3>

                    <?php foreach ($informations as $information): ?>

                        <p>✓ <?= $information ?></p>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- Les dimensions -->

        <section class="section dimensions" id="dimensions">

            <div class="container">

                <div class="section-title">

                    <p class="small-title">LES DIMENSIONS DU TDAH</p>

                    <h2>Trois aspects à découvrir</h2>

                    <p>
                        Le TDAH peut se présenter sous différentes
                        formes. Voici trois dimensions importantes.
                    </p>

                </div>


                <div class="cards">

                    <?php foreach ($dimensions as $dimension): ?>

                        <div class="card">

                            <span class="card-icon">
                                <?= $dimension["icon"] ?>
                            </span>

                            <h3>
                                <?= $dimension["title"] ?>
                            </h3>

                            <p>
                                <?= $dimension["description"] ?>
                            </p>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- À propos -->

        <section class="section" id="apropos">

            <div class="container about">

                <div>
                    <p class="small-title">NOTRE OBJECTIF</p>

                    <h2>Un espace pour mieux comprendre.</h2>
                </div>

                <p>
                    ClariMind est un projet éducatif qui a pour
                    objectif de sensibiliser au TDAH et de partager
                    des informations utiles dans un environnement
                    simple, positif et bienveillant.
                </p>

            </div>

        </section>

    </main>


    <!-- Footer -->

    <footer>

        <div class="container footer-content">

            <a href="#accueil" class="logo">
                ClariMind<span>.</span>
            </a>

            <p>Mieux comprendre, sans étiqueter.</p>

            <p class="copyright">
                © 2026 ClariMind - Projet éducatif étudiant.
            </p>

        </div>

    </footer>

</body>
</html>
