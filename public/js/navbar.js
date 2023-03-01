const navEl = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    if (window.scrollY >= 56) {
        navEl.classList.remove('bg-transparent');
        navEl.classList.remove('navbar-dark');
        navEl.classList.add('bg-light');
        navEl.classList.add('navbar-light');
    }else if (window.scrollY < 56) {
        navEl.classList.remove('bg-light');
        navEl.classList.remove('navbar-light');
        navEl.classList.add('bg-transparent');
        navEl.classList.add('navbar-dark');
    }
});