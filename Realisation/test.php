
<?php

$questions = [
    "Est-ce que tu as du mal à rester concentré(e) ?",
    "Est-ce que tu oublies souvent les tâches que tu dois faire ?",
    "Est-ce que tu as souvent besoin de bouger ?",
    "Est-ce que tu interromps parfois les autres sans le vouloir ?"
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClariMind - Auto-observation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="section">

        <div class="container">

            <div class="section-title">

                <p class="small-title">CLARIMIND</p>

                <h2>Apprenons à mieux nous connaître</h2>

                <p>
                    Réponds aux questions suivantes en pensant
                    à tes expériences quotidiennes.
                </p>

            </div>

            <form method="POST">

                <?php foreach ($questions as $index => $question): ?>

                    <div class="info-box">

                        <h3>
                            Question <?= $index + 1 ?>
                        </h3>

                        <p><?= $question ?></p>

                        <label>
                            <input type="radio"
                                name="question<?= $index ?>"
                                value="Jamais"
                                required>
                            Jamais
                        </label>

                        <br>

                        <label>
                            <input type="radio"
                                name="question<?= $index ?>"
                                value="Parfois">
                            Parfois
                        </label>

                        <br>

                        <label>
                            <input type="radio"
                                name="question<?= $index ?>"
                                value="Souvent">
                            Souvent
                        </label>

                        <br>

                        <label>
                            <input type="radio"
                                name="question<?= $index ?>"
                                value="Très souvent">
                            Très souvent
                        </label>

                    </div>

                <?php endforeach; ?>

                <button type="submit" name="submit" class="button">
                    Voir mes réponses
                </button>

            </form>

            <?php if (isset($_POST["submit"])): ?>

                <div class="remember-box">

                    <h3>Merci pour tes réponses !</h3>

                    <p>
                        Tes réponses ont été recueillies.
                        Cette activité est éducative et ne constitue
                        pas un diagnostic médical.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </section>

</body>
</html>
