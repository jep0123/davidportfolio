<?php
$page = 'home';
$pageTitle = 'Home';
include __DIR__ . '/header.php';

$featured = array_slice($projects, 0, 3);
$nameParts = explode(' ', $site['name'], 2);
?>

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <h1>
                Hi, I'm <span class="accent-text"><?= e($nameParts[0]) ?></span><?= isset($nameParts[1]) ? ' ' . e($nameParts[1]) : '' ?>
                <em><?= e($site['role']) ?></em>
            </h1>
            <p class="lead"><?= e($site['tagline']) ?></p>
            <div class="btn-row">
                <a class="btn btn-primary" href="projects.php">View my work
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                <a class="btn btn-ghost" href="about.php">More about me</a>
            </div>
        </div>

        <figure class="portrait-card reveal">
            <img src="profile.jpg" alt="Photo of <?= e($site['name']) ?>">
            <figcaption>
                <strong><?= e($site['name']) ?></strong>
                <span><?= e($site['role']) ?></span>
            </figcaption>
        </figure>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="stat-row reveal">
            <div class="stat">
                <strong><?= count($projects) ?></strong>
                <div class="stat-copy">
                    <span class="stat-label">Projects built</span>
                    <small>Personal and academic work</small>
                </div>
            </div>
            <div class="stat">
                <strong>6+</strong>
                <div class="stat-copy">
                    <span class="stat-label">Technologies explored</span>
                    <small>Programming and web development</small>
                </div>
            </div>
            <div class="stat">
                <strong>3rd</strong>
                <div class="stat-copy">
                    <span class="stat-label">Year BSIT</span>
                    <small>College student</small>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Selected work</p>
            <h2>A few things I've made</h2>
            <a class="text-link" href="projects.php">See all projects →</a>
        </div>

        <div class="project-grid">
            <?php foreach ($featured as $p): ?>
                <?php include __DIR__ . '/card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band reveal">
            <h2>Have a project in mind?</h2>
            <p>I'm always happy to talk about websites, small apps or games.</p>
            <a class="btn btn-primary" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=<?= rawurlencode($site['email']) ?>">Contact me</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
