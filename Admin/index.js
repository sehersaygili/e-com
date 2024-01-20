document.addEventListener('DOMContentLoaded', function() {
    const themeToggler = document.querySelector(".theme-toggler");

    if (themeToggler) {
        themeToggler.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme-variables');
            
            // Toggle the "active" class between the two spans
            const lightModeIcon = themeToggler.querySelector('.material-symbols-outlined.active');
            const darkModeIcon = themeToggler.querySelector('.material-symbols-outlined:not(.active)');
            
            lightModeIcon.classList.toggle('active');
            darkModeIcon.classList.toggle('active');
        });
    } else {
        console.error('Theme toggler element not found.');
    }
});

