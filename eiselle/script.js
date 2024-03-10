/* header toggle */
let MenuBtn = document.getElementById('MenuBtn');

MenuBtn.addEventListener('click', function (e) {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    this.classList.toggle('fa-xmark');
});

/* Typing Effect */
let typed = new Typed('.auto-input', {
    strings: ['21 Years Old.', 'Third Year College Student at NU-FV.',  'Taking BSIT-MI.'],
    typeSpeed: 50,
    backSpeed: 5,
    backDelay: 2000,
    loop: true,
});


