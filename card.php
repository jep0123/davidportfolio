<?php
/**
 * card.php — one project card. Expects $p (a project array).
 * The data-category attribute is what the JS filter reads.
 */
$glyphs = [
    'web'    => '<path d="M8 8l-5 4 5 4M16 8l5 4-5 4M14 5l-4 14"/>',
    'python' => '<path d="M12 3c-4 0-4 1.5-4 3v2h5v1H6c-2 0-3 1.5-3 4s1 4 3 4h2v-2.5c0-2 1.500-3.500 3.500-3.500H15c1.500 0 2.500-1 2.500-2.500V6c0-1.500-2-3-5.500-3zM16 17.500V20c0 1.500-2 1-4 1s-4 .5-4-1"/>',
    'games'  => '<path d="M6 12h4M8 10v4M15 11h.01M18 13h.01M7 6h10a4 4 0 0 1 4 4v3a4 4 0 0 1-4 4l-2-2H9l-2 2a4 4 0 0 1-4-4v-3a4 4 0 0 1 4-4z"/>',
];
$glyph = $glyphs[$p['category']] ?? $glyphs['web'];
?>
<article class="project-card reveal" data-category="<?= e($p['category']) ?>">
    <div class="cover cover--<?= e($p['category']) ?>">
        <?php if (!empty($p['image'])): ?>
    <img src="<?= e($p['image']) ?>" alt="<?= e($p['title']) ?> screenshot" loading="lazy">
<?php else: ?>
    <svg viewBox="0 0 24 24" width="56" height="56" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?= $glyph ?></svg>
<?php endif; ?>
        <span class="badge"><?= e(ucfirst($p['category'])) ?></span>
    </div>
    <div class="card-body">
        <h3><?= e($p['title']) ?></h3>
        <p><?= e($p['desc']) ?></p>
        <ul class="tags">
            <?php foreach ($p['tags'] as $tag): ?>
                <li><?= e($tag) ?></li>
            <?php endforeach; ?>
        </ul>
        <a class="text-link" href="<?= e($p['link']) ?>">View project →</a>
    </div>
</article>
