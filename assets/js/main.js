(function () {
    'use strict';

    var header = document.getElementById('site-header');
    var navToggle = document.getElementById('nav-toggle');
    var mainNav = document.getElementById('main-nav');
    var navLinks = document.querySelectorAll('.main-nav__link');
    var sections = document.querySelectorAll('main section[id]');

    function closeNav() {
        if (!mainNav || !navToggle) {
            return;
        }

        mainNav.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Abrir menu');
    }

    function toggleNav() {
        var isOpen = mainNav.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', String(isOpen));
        navToggle.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
    }

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', toggleNav);

        navLinks.forEach(function (link) {
            link.addEventListener('click', closeNav);
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeNav();
            }
        });
    }

    // Header shadow/background on scroll
    function handleHeaderScroll() {
        if (!header) {
            return;
        }

        if (window.scrollY > 8) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    }
    if (header) {
        handleHeaderScroll();
        window.addEventListener('scroll', handleHeaderScroll, { passive: true });
    }

    // Active nav link based on scroll position
    if ('IntersectionObserver' in window && sections.length) {
        var navObserver = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var id = entry.target.getAttribute('id');
                        navLinks.forEach(function (link) {
                            link.classList.toggle(
                                'is-active',
                                link.getAttribute('href') === '#' + id
                            );
                        });
                    }
                });
            },
            { rootMargin: '-45% 0px -45% 0px', threshold: 0 }
        );

        sections.forEach(function (section) {
            navObserver.observe(section);
        });
    }

    // Reveal-on-scroll animations
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        var revealObserver = new IntersectionObserver(
            function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
        );

        revealEls.forEach(function (el) {
            revealObserver.observe(el);
        });
    } else {
        revealEls.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }
})();
