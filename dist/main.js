/* main.js — theme toggle, mobile nav, project filter, reveal-on-scroll */
(function () {
    'use strict';

    var root = document.documentElement;

    /* ---------- Dark / light theme ---------- */
    var themeBtn = document.getElementById('theme-toggle');
    var portrait = document.querySelector('.portrait-card img');
    var brandLogo = document.querySelector('.brand-logo');

    function applyTheme(theme) {
        root.setAttribute('data-theme', theme);
        try { localStorage.setItem('theme', theme); } catch (e) {}
        if (portrait) {
            portrait.src = theme === 'light' ? 'profilel.jpg' : 'profile.jpg';
        }
        if (brandLogo) {
            brandLogo.src = theme === 'light' ? 'logoo.png' : 'logoo.png';
        }
        if (themeBtn) {
            themeBtn.setAttribute(
                'aria-label',
                theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode'
            );
        }
    }

    if (themeBtn) {
        applyTheme(root.getAttribute('data-theme') || 'dark');
        themeBtn.addEventListener('click', function () {
            applyTheme(root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
        });
    }

    /* ---------- Mobile navigation ---------- */
    var navBtn = document.getElementById('nav-toggle');
    var nav = document.getElementById('site-nav');

    function setNav(open) {
        document.body.classList.toggle('nav-open', open);
        navBtn.setAttribute('aria-expanded', String(open));
        navBtn.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }

    if (navBtn && nav) {
        navBtn.addEventListener('click', function () {
            setNav(!document.body.classList.contains('nav-open'));
        });
        nav.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') setNav(false);
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') setNav(false);
        });
        window.matchMedia('(min-width: 768px)').addEventListener('change', function (e) {
            if (e.matches) setNav(false);
        });
    }

    /* ---------- Project filter (toggles a CSS class, no reload) ---------- */
    var filterBar = document.querySelector('.filter-bar');
    var grid = document.getElementById('project-grid');
    var statusEl = document.getElementById('filter-status');

    if (filterBar && grid) {
        var buttons = filterBar.querySelectorAll('.filter-btn');
        var cards = grid.querySelectorAll('.project-card');

        filterBar.addEventListener('click', function (e) {
            var btn = e.target.closest('.filter-btn');
            if (!btn) return;

            var filter = btn.getAttribute('data-filter');
            var shown = 0;

            buttons.forEach(function (b) {
                var active = b === btn;
                b.classList.toggle('is-active', active);
                b.setAttribute('aria-pressed', String(active));
            });

            cards.forEach(function (card) {
                var match = filter === 'all' || card.getAttribute('data-category') === filter;
                card.classList.toggle('is-hidden', !match);
                if (match) {
                    shown++;
                    // restart the pop-in animation
                    card.classList.remove('pop');
                    void card.offsetWidth;
                    card.classList.add('pop');
                }
            });

            if (statusEl) {
                statusEl.textContent = filter === 'all'
                    ? 'Showing all ' + shown + ' projects'
                    : 'Showing ' + shown + ' ' + btn.firstChild.textContent.trim() + ' project' + (shown === 1 ? '' : 's');
            }
        });
    }

    /* ---------- Reveal on scroll ---------- */
    var items = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach(function (el) { io.observe(el); });
    } else {
        items.forEach(function (el) { el.classList.add('is-visible'); });
    }
})();
