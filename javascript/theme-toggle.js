/**
 * Theme Toggle — Dark / Light Mode
 * Persists choice via localStorage across all pages.
 */
(function () {
    const body = document.body;
    const saved = localStorage.getItem('theme');

    // Apply saved preference immediately (before DOM paints)
    if (saved === 'light') body.classList.add('light');

    function updateIcons() {
        const isLight = body.classList.contains('light');
        // Desktop icons
        const sun = document.getElementById('sun-icon');
        const moon = document.getElementById('moon-icon');
        if (sun && moon) {
            sun.classList.toggle('hidden', isLight);
            moon.classList.toggle('hidden', !isLight);
        }
        // Mobile icons
        document.querySelectorAll('.sun-icon-m').forEach(s => s.classList.toggle('hidden', isLight));
        document.querySelectorAll('.moon-icon-m').forEach(m => m.classList.toggle('hidden', !isLight));
    }

    function toggleTheme() {
        body.classList.toggle('light');
        localStorage.setItem('theme', body.classList.contains('light') ? 'light' : 'dark');
        updateIcons();
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateIcons();
        document.getElementById('theme-toggle-desktop')?.addEventListener('click', toggleTheme);
        document.getElementById('theme-toggle-mobile')?.addEventListener('click', toggleTheme);

        // Nav shrink on scroll
        const nav = document.getElementById('main-nav');
        if (nav) {
            window.addEventListener('scroll', () => {
                const inner = nav.querySelector('nav');
                if (inner) {
                    if (window.scrollY > 50) inner.classList.add('nav-scrolled');
                    else inner.classList.remove('nav-scrolled');
                }
            });
        }
    });
})();
