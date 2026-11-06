</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; <?= e((string) $site['year']) ?> <?= e($site['name']) ?>. Built with PHP, CSS &amp; JavaScript.</p>
        <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="<?= e($site['github']) ?>" target="_blank" rel="noopener">GitHub</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
