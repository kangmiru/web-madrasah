const navEl = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    if (window.scrollY >= 56) {
        navEl.classList.remove('bg-transparent');
        navEl.classList.add('bg-light');
    }else if (window.scrollY < 56) {
        navEl.classList.remove('bg-light');
        navEl.classList.add('bg-transparent');
    }
});