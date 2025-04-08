document.addEventListener('DOMContentLoaded', function () {
    const burgerIcon = document.getElementById('burger_icon');
    const navLinks = document.getElementById('nav_links');

    function toggleMenu() {
        navLinks.classList.toggle('show');
        burgerIcon.classList.toggle('active_burger');

        const isExpanded = burgerIcon.classList.contains('active_burger');
        burgerIcon.setAttribute('aria-expanded', isExpanded);
    }

    burgerIcon?.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent click from bubbling
        toggleMenu();
    });

    document.addEventListener('click', function (e) {
        if (!navLinks.contains(e.target) && !burgerIcon.contains(e.target)) {
            navLinks.classList.remove('show');
            burgerIcon.classList.remove('active_burger');
            burgerIcon.setAttribute('aria-expanded', 'false');
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            navLinks.classList.remove('show');
            burgerIcon.classList.remove('active_burger');
            burgerIcon.setAttribute('aria-expanded', 'false');
        }
    });
});
