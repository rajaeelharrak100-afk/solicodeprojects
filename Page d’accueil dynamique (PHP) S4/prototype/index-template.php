<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($name) ?> | My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav class="navbar">
        <h2>My Portfolio</h2>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>

    <!-- HOME -->
    <section class="home" id="home">
        <div>
            <p class="welcome">WELCOME TO MY PORTFOLIO</p>

            <h1>Hi, I'm <?= htmlspecialchars($name) ?></h1>

            <h2>I'm learning Web Development</h2>

            <p>
                I enjoy creating websites and learning new things.
                This portfolio shows some of my work and what I have learned so far.
            </p>

            <a href="#projects" class="btn">View My Work</a>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <h2>About Me</h2>

        <p>
            My name is <?= htmlspecialchars($name) ?>.
            I am a student at Solicode, where I study web development.
            I am interested in creating websites using HTML, CSS and JavaScript.
        </p>

        <p>
            I am still learning and improving my skills.
            My goal is to become a good web developer and create useful websites.
        </p>
    </section>

    <!-- SKILLS -->
    <section class="skills" id="skills">
        <h2>My Skills</h2>

        <div class="skills-container">

            <?php if (!empty($skills)): ?>

                <?php foreach ($skills as $skill): ?>

                    <div class="skill-card">
                        <h3><?= htmlspecialchars($skill['name']) ?></h3>

                        <p>
                            <?= htmlspecialchars($skill['description']) ?>
                        </p>
                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <p>No skills available for the moment.</p>

            <?php endif; ?>

        </div>
    </section>

    <!-- PROJECTS -->
    <section class="projects" id="projects">
        <h2>My Projects</h2>

        <div class="projects-container">

            <?php if (!empty($projects)): ?>

                <?php foreach ($projects as $project): ?>

                    <article class="project-card">

                        <h3>
                            <?= htmlspecialchars($project['name']) ?>
                        </h3>

                        <?php if ($project['featured']): ?>
                            <span class="project-label">Featured Project</span>
                        <?php else: ?>
                            <span class="project-label">Personal Project</span>
                        <?php endif; ?>

                        <p>
                            <?= htmlspecialchars($project['description']) ?>
                        </p>

                        <span>
                            <?= htmlspecialchars($project['technologies']) ?>
                        </span>

                    </article>

                <?php endforeach; ?>

            <?php else: ?>

                <p>No projects available for the moment.</p>

            <?php endif; ?>

        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <h2>Contact Me</h2>

        <p>
            Do you have a question or want to work together?
            Feel free to contact me.
        </p>

        <a href="mailto:<?= htmlspecialchars($email) ?>" class="btn">
            Send Me an Email
        </a>
    </section>

</main>

<footer>
    <p>&copy; <?= date("Y") ?> <?= htmlspecialchars($name) ?> | My Portfolio</p>
</footer>

</body>
</html>