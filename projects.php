<?php
$page = 'projects';
$pageTitle = 'Projects';
include __DIR__ . '/header.php';

// Count projects per category for the filter buttons
$counts = array_count_values(array_column($projects, 'category'));
$counts['all'] = count($projects);
?>

<section class="page-hero">
    <div class="container reveal">
        <p class="eyebrow">Projects</p>
        <h1>Things I've <span class="accent-text">built</span>.</h1>
        <p class="lead">Filter by type. Everything updates instantly, with no page reload.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <!-- Filter bar: JS toggles a CSS class on each card -->
        <div class="filter-bar" role="group" aria-label="Filter projects by category">
            <?php foreach ($categories as $key => $label): ?>
                <button type="button"
                        class="filter-btn <?= $key === 'all' ? 'is-active' : '' ?>"
                        data-filter="<?= e($key) ?>"
                        aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>">
                    <?= e($label) ?> <span class="count"><?= (int) ($counts[$key] ?? 0) ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <p class="filter-status" id="filter-status" role="status" aria-live="polite">
            Showing all <?= count($projects) ?> projects
        </p>

        <div class="project-grid" id="project-grid">
            <?php foreach ($projects as $p): ?>
                <?php include __DIR__ . '/card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
