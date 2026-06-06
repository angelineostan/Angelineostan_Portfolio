/**
 * Theme Toggle — Dark / Light Mode
 * Persists choice via localStorage across all pages.
 *
 * Theme class is applied to BOTH <html> and <body>:
 *   - <html> gets it in <head> (prevents flash)
 *   - <body> gets it after <body> opens (for body.light CSS selectors)
 */
(function () {
    const SUN_PATH = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />';
    const MOON_PATH = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />';

    function isLight() {
        return document.documentElement.classList.contains('light');
    }

    function updateIcon() {
        var icon = document.getElementById('theme-icon');
        if (icon) icon.innerHTML = isLight() ? MOON_PATH : SUN_PATH;
    }

    function toggleTheme() {
        document.documentElement.classList.toggle('light');
        document.body.classList.toggle('light');
        localStorage.setItem('theme', isLight() ? 'light' : 'dark');
        updateIcon();
    }

    // Update icon immediately (theme class already on <html> from head script)
    updateIcon();

    document.addEventListener('DOMContentLoaded', function () {
        var btn = document.getElementById('theme-toggle');
        if (btn) btn.addEventListener('click', toggleTheme);
        updateIcon();
    });
})();
