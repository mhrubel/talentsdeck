document.addEventListener('DOMContentLoaded', function() {

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    var themeToggleBtn = document.getElementById('theme-toggle');

    function setTheme(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
            themeToggleDarkIcon.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden');
            themeToggleLightIcon.classList.add('hidden');
        }
        localStorage.setItem('color-theme', theme);
    }

    // Check for user-defined theme in local storage
    var storedTheme = localStorage.getItem('color-theme');
    if (storedTheme) {
        setTheme(storedTheme);
    } else {
        // Use OS preference if no user-defined theme
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            setTheme('dark');
        } else {
            setTheme('light');
        }
    }

    // Click to change theme
    themeToggleBtn.addEventListener('click', function() {
        var currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
        var newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    });

    // Listen for OS theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
        if (!localStorage.getItem('color-theme')) {
            setTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Mobile Menu close icon show/hide on click
    document.getElementById('mega-menu-toggle').addEventListener('click', function() {
        var openIcon = document.getElementById('mega-menu-open-icon');
        var closeIcon = document.getElementById('mega-menu-close-icon');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

});
