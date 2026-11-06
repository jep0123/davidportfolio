<?php
/**
 * header.php — shared <head> + navigation, included by every page.
 * Expects $page ('home' | 'about' | 'projects') and $pageTitle to be set.
 */
require_once __DIR__ . '/data.php';

$nav = [
    'home'     => ['index.php',    'Home'],
    'about'    => ['about.php',    'About'],
    'projects' => ['projects.php', 'Projects'],
];
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> · <?= e($site['name']) ?></title>
    <meta name="description" content="<?= e($site['name']) ?> — <?= e($site['role']) ?>. <?= e($site['tagline']) ?>">

    <!-- Apply saved / system theme BEFORE paint to avoid a flash -->
    <script>
        (function () {
            try {
                var saved = localStorage.getItem('theme');
                var system = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', saved || system);
            } catch (e) {}
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=JetBrains+Mono:wght@400;500&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>
<body data-page="<?= e($page) ?>">
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php" aria-label="<?= e($site['name']) ?> — home">
            <img class="brand-logo" src="logoo.png" alt="" aria-hidden="true">
            <span class="brand-name"><?= e($site['name']) ?></span>
        </a>

        <nav class="site-nav" id="site-nav" aria-label="Main navigation">
            <ul>
                <?php foreach ($nav as $key => [$href, $label]): ?>
                    <li>
                        <a href="<?= e($href) ?>"
                           class="<?= $page === $key ? 'is-active' : '' ?>"
                           <?= $page === $key ? 'aria-current="page"' : '' ?>><?= e($label) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="header-actions">
            <button class="icon-btn theme-toggle" id="theme-toggle" type="button" aria-label="Switch to light mode" title="Toggle theme">
                <svg class="icon-sun" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="4"/>
                    <path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>
                </svg>
                <svg class="icon-moon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/>
                </svg>
            </button>
            <button class="icon-btn nav-toggle" id="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
                <span class="bars" aria-hidden="true"><i></i><i></i><i></i></span>
            </button>
        </div>
    </div>
</header>

<main id="main">
