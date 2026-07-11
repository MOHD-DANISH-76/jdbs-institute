import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('mainNavbar');

    if (!navbar) {
        return;
    }

    navbar.querySelectorAll('.nav-link').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                navbar.classList.remove('show');
            }
        });
    });
});