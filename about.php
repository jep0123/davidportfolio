<?php
$page = 'about';
$pageTitle = 'About';
include __DIR__ . '/header.php';
?>

<section class="page-hero">
    <div class="container reveal">
        <p class="eyebrow">About</p>
        <h1>The person behind the <span class="accent-text">code</span>.</h1>
    </div>
</section>

<section class="section about-intro-section">
    <div class="container about-grid">
        <div class="about-copy reveal">
            <p class="lead">
                I'm <?= e($site['name']) ?>, a BSIT student based in <?= e($site['location']) ?>.
                with an interest in web development, game development, software development, and programming.
                I'm passionate about exploring how technology works and using what I learn to build useful and meaningful projects.
            </p>
            <p>
                Throughout my journey as an IT student, I've gained experience working with different programming languages and technologies, 
                including HTML, CSS, JavaScript, PHP, MySQL, Java, C#, and Python.
            </p>
            <p>
                I enjoy learning through hands-on experience, experimenting with new ideas, and challenging myself to solve problems through programming. 
                I'm still growing as a developer, and I'm always looking for opportunities to improve my skills and expand my knowledge.
            </p>
            <p>
                My goal is to continue developing my technical abilities and create projects that combine functionality, creativity, and practical solutions.
            </p>
            <div class="btn-row">
                <a class="btn btn-primary" href="projects.php">See my projects</a>
                <a class="btn btn-ghost" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=<?= rawurlencode($site['email']) ?>">Contact me</a>
            </div>
        </div>

        <aside class="info-card reveal">
            <h2>Quick facts</h2>
            <dl>
                <dt>Current Status</dt><dd><?= e($site['role']) ?></dd>
                <dt>Based In</dt><dd><?= e($site['location']) ?></dd>
                <dt>Email</dt><dd><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=<?= rawurlencode($site['email']) ?>"><?= e($site['email']) ?></a></dd>
                <dt>GitHub</dt><dd><a href="<?= e($site['github']) ?>" target="_blank" rel="noopener">View profile</a></dd>
            </dl>
        </aside>
    </div>
</section>

<section class="section about-followup-section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Toolbox</p>
            <h2>Skills &amp; tools</h2>
        </div>
        <div class="skills-grid">
            <?php foreach ($skills as $group => $items): ?>
                <div class="skill-group reveal">
                    <h3><?= e($group) ?></h3>
                    <ul class="tags">
                        <?php foreach ($items as $item): ?>
                            <li><?= e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section about-followup-section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Education</p>
        </div>
        <ol class="timeline education-timeline">
            <div class="education-heading">
                <h3><?= e($education['school']) ?></h3>
                <span class="year"><?= e($education['year']) ?></span>
            </div>
            <li class="reveal">
                <h3 class="education-degree"><?= e($education['degree']) ?></h3>
            </li>
            <li class="reveal">
                <p><?= e($education['description']) ?></p>
            </li>
        </ol>
    </div>
</section>

<section class="section about-followup-section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">My Progress</p>
        </div>
        <ol class="timeline">
            <?php foreach ($timeline as [$year, $title, $text]): ?>
                <li class="reveal">
                    <span class="year"><?= e($year) ?></span>
                    <div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
