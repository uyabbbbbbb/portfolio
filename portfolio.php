<?php
session_start();

$login = isset($_SESSION["login"]) && $_SESSION["login"] === true;
$username = $_SESSION["username"] ?? "";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bayu - Portfolio</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="navbar">

    <div class="container nav-wrapper">

        <a href="portfolio.php" class="logo">
            BAYU
        </a>

        <nav class="nav-menu">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#experience">Experience</a>
            <a href="#creations">Projects</a>
        </nav>

        <div class="nav-actions">

            <?php if ($login): ?>

                <span class="welcome-user">
                    Hi, <?= htmlspecialchars($username) ?>
                </span>

                <a href="dashboard.php" class="auth-button">
                    Dashboard
                </a>

                <a href="logout.php" class="auth-button logout-button">
                    Logout
                </a>

            <?php else: ?>

                <a href="login.php" class="auth-button">
                    Login
                </a>

            <?php endif; ?>

        </div>

    </div>

</header>


<section class="hero">

    <div class="container hero-grid">

        <div class="profile-photo">

            <div class="photo-placeholder">
                PHOTO
            </div>

        </div>

        <div class="hero-content">

            <p class="username">
                @Bayu
            </p>

            <h1>
                Bayu
            </h1>

            <h2>
                Frontend Developer
            </h2>

            <p class="location">
                Indonesia, Samarinda
            </p>

            <p class="bio">
                Saya sedang belajar frontend development,
                3D model, dan mengembangkan project Roblox.
            </p>

            <div class="hero-buttons">

                <a href="#creations" class="button button-primary">
                    Hall of Creations
                </a>

                <a href="#about" class="button button-secondary">
                    About Me
                </a>

            </div>

        </div>

    </div>

</section>


<section id="about" class="section">

    <div class="container">

        <div class="section-header">
            <span>01</span>
            <h2>About Me</h2>
        </div>

        <div class="about-grid">

            <p class="about-large">
                FRONTEND<br>
                DEVELOPER
            </p>

            <div class="about-text">

                <p>
                    Saya sedang belajar dan mengembangkan
                    kemampuan frontend development.
                </p>

                <p>
                    Saya juga tertarik dengan 3D model,
                    UI/UX, dan project Roblox.
                </p>

            </div>

        </div>

    </div>

</section>


<section id="skills" class="section">

    <div class="container">

        <div class="section-header">
            <span>02</span>
            <h2>Skills</h2>
        </div>

        <div class="skills-grid">

            <div class="skill-card">

                <h3>HTML</h3>

                <p>
                    Struktur dan pembuatan website.
                </p>

                <strong>85%</strong>

                <div class="skill-bar">
                    <div
                        class="skill-progress"
                        data-progress="85">
                    </div>
                </div>

            </div>


            <div class="skill-card">

                <h3>CSS</h3>

                <p>
                    Membuat tampilan website.
                </p>

                <strong>80%</strong>

                <div class="skill-bar">
                    <div
                        class="skill-progress"
                        data-progress="80">
                    </div>
                </div>

            </div>


            <div class="skill-card">

                <h3>JavaScript</h3>

                <p>
                    Membuat website menjadi interaktif.
                </p>

                <strong>65%</strong>

                <div class="skill-bar">
                    <div
                        class="skill-progress"
                        data-progress="65">
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<section id="education" class="section">

    <div class="container">

        <div class="section-header">
            <span>03</span>
            <h2>Education</h2>
        </div>

        <div class="timeline">

            <div class="timeline-content">

                <small>
                    2028 - Present
                </small>

                <h3>
                    UNIVERSITAS NGAWI
                </h3>

                <h4>
                    INFORMATIKA
                </h4>

                <p>
                    Pendidikan di bidang informatika.
                </p>

            </div>


            <div class="timeline-content">

                <small>
                    2025 - 2027
                </small>

                <h3>
                    ALEXANDER SCHOOL
                </h3>

                <h4>
                    PPLG
                </h4>

                <p>
                    Belajar pemrograman dan website.
                </p>

            </div>

        </div>

    </div>

</section>


<section id="experience" class="section">

    <div class="container">

        <div class="section-header">
            <span>04</span>
            <h2>Experience</h2>
        </div>

        <div class="experience-list">

            <div class="experience-item">

                <div>

                    <small>
                        2025 - Present
                    </small>

                    <h3>
                        Frontend Developer
                    </h3>

                    <p>
                        Personal / Freelance
                    </p>

                </div>

            </div>


            <div class="experience-item">

                <div>

                    <small>
                        2024 - 2025
                    </small>

                    <h3>
                        UI/UX Designer
                    </h3>

                    <p>
                        Personal Project
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section id="creations" class="section">

    <div class="container">

        <div class="section-header">
            <span>05</span>
            <h2>Projects</h2>
        </div>

        <div class="creation-list">

            <div class="creation-item">

                <span>01</span>

                <div>

                    <h3>
                        Personal Portfolio
                    </h3>

                    <p>
                        Website portfolio personal.
                    </p>

                </div>

            </div>


            <div class="creation-item">

                <span>02</span>

                <div>

                    <h3>
                        Learning Dashboard
                    </h3>

                    <p>
                        Dashboard untuk melihat progress belajar.
                    </p>

                </div>

            </div>


            <div class="creation-item">

                <span>03</span>

                <div>

                    <h3>
                        Creative Landing Page
                    </h3>

                    <p>
                        Landing page untuk project digital.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<footer class="footer">

    <p>
        nothing
    </p>

</footer>


<script src="script.js"></script>

</body>
</html>