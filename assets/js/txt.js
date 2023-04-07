document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const section = this.getAttribute('href');
        document.querySelector(section).style.display = 'block';
        anchor.style.display = 'none';
        document.querySelector(section).scrollIntoView({
            behavior: 'smooth'
        });   
    });
});