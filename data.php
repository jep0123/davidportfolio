<?php
/**
 * data.php — the ONE file you edit to make this portfolio yours.
 * Every page reads from here.
 */

$site = [
    'name'     => 'Jefferson David',
    'role'     => 'Student | Aspiring Developer',
    'tagline'  => 'A 3rd year BSIT student aspiring to be a developer with an interest in web, software, and game development. I enjoy developing practical solutions, learning new technologies, and continuously improving my technical skills.',
    'location' => 'Philippines',
    'email'    => 'jeffersondavid1102@gmail.com',
    'github'   => 'https://github.com/jep0123',
    'linkedin' => 'https://linkedin.com/in/yourusername',
    'year'     => date('Y'),
];

$skills = [
    'Frontend' => ['HTML', 'CSS', 'JavaScript'],
    'Backend'  => ['PHP', 'MySQL', 'Python', 'REST APIs'],
    'Programming'=> ['Java','Python', 'C#'],
    'Tools'    => ['Git & GitHub', 'VS Code', 'Figma', 'MySQL', 'SSMS', 'Visual Studio', 'pycharm', 'Unity', 'NetBeans', 'XAMPP'],
];

$education = [
    'year'        => '2024 - 2026',
    'school'      => 'Pamantasan ng Lungsod ng Valenzuela',
    'degree'      => 'Bachelor of Science in Information Technology',
    'description' => 'Currently in my third year, focusing on web development, game development, and programming.',
];

$timeline = [
    ['2025', 'First project', 'Built a small resort management system.'],
    ['2024', 'Started learning to code', 'Began with HTML and CSS, then moved to Python and PHP.'],
];

/*
 * Projects.
 * 'category' must be one of: web, games
 * (these match the filter buttons on projects.php)
 */
$projects = [
    [
        'title'    => 'Resort Management System',
        'category' => 'web',
        'desc'     => 'A web-based system for managing resort bookings, rooms and guest records, with an admin 
                      dashboard for tracking reservations and availability.',
        'tags'     => ['HTML', 'MySQL', 'CSS', 'JavaScript'],
        'link'     => 'https://hiddensanctuary.onrender.com',
        'image'     => 'resort.png',
    ],
    [
        'title'    => 'Kiosk Queue System',
        'category' => 'web',
        'desc'     => 'A web-based restaurant kiosk system featuring customer ordering, kitchen queue management, 
                      and a live order status board for a smoother and more organized ordering experience.',
        'tags'     => ['HTML', 'CSS', 'JavaScript'],
        'link'     => 'https://jep0123.github.io/kioskqueuesystem/',
        'image'     => 'kiosk.png',
    ],
    [
        'title'    => 'WinSoles – Sneaker Marketplace',
        'category' => 'web',
        'desc'     => 'A web-based sneaker marketplace for buying and selling authentic deadstock sneakers, featuring live bids, 
                      product listings, price tracking, and authentication services.',
        'tags'     => ['HTML', 'CSS', 'JavaScript'],
        'link'     => 'https://winsoles.vercel.app/',
        'image'     => 'winsoles.png',
    ],
    
    
];

$categories = [
    'all'    => 'All',
    'web'    => 'Web',
    'games'  => 'Games',
];

/** Escape output safely. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}