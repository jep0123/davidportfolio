<?php
/**
 * build.php — turns the PHP pages into plain HTML in the "dist" folder,
 * so the site can be hosted as a static site on Vercel.
 *
 * Run:  php build.php
 * Re-run it every time you edit data.php or any page.
 */
$pages = ['index', 'about', 'projects'];
$out   = __DIR__ . '/dist';

function rrmdir(string $d): void {
    if (!is_dir($d)) return;
    foreach (scandir($d) as $f) {
        if ($f === '.' || $f === '..') continue;
        is_dir("$d/$f") ? rrmdir("$d/$f") : unlink("$d/$f");
    }
    rmdir($d);
}
function rcopy(string $src, string $dst): void {
    @mkdir($dst, 0777, true);
    foreach (scandir($src) as $f) {
        if ($f === '.' || $f === '..') continue;
        is_dir("$src/$f") ? rcopy("$src/$f", "$dst/$f") : copy("$src/$f", "$dst/$f");
    }
}

rrmdir($out);
mkdir($out, 0777, true);

foreach ($pages as $p) {
    $html = shell_exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__DIR__ . "/$p.php"));
    if ($html === null || trim($html) === '') { fwrite(STDERR, "Failed to render $p.php\n"); exit(1); }
    // page links: about.php -> about.html
    $html = preg_replace('/href="(index|about|projects)\.php"/', 'href="$1.html"', $html);
    file_put_contents("$out/$p.html", $html);
    echo "built $p.html\n";
}

foreach (glob(__DIR__ . '/*') as $file) {
    if (is_file($file) && preg_match('/\.(?:css|js|png|jpe?g|gif|webp|svg|ico)$/i', $file)) {
        if (!copy($file, $out . '/' . basename($file))) {
            fwrite(STDERR, "Failed to copy " . basename($file) . "\n");
            exit(1);
        }
    }
}
foreach (['images', 'downloads'] as $dir) {
    if (is_dir(__DIR__ . "/$dir")) rcopy(__DIR__ . "/$dir", "$out/$dir");
}
echo "Done. Deploy the 'dist' folder on Vercel.\n";
