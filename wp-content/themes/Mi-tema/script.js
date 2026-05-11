/**
 * EL PATIO ANTIGUO - Main Scripts
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    const pageType = navbar ? navbar.getAttribute('data-page-type') : 'inner';

    window.addEventListener('scroll', () => {
        if (!navbar) return;
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            if (pageType === 'home') {
                navbar.classList.remove('scrolled');
            }
        }
    });

    // 2. Carousel Controller Class
    class Carousel {
        constructor(id, interval = 5000) {
            this.container = document.getElementById(id);
            if (!this.container) return;

            this.slides = this.container.querySelectorAll('.carousel-item');
            if (this.slides.length === 0) return;

            this.nextBtn = this.container.querySelector('.next');
            this.prevBtn = this.container.querySelector('.prev');
            this.currentSlide = 0;
            this.interval = interval;
            this.autoSlide = null;
            this.isTransitioning = false;

            this.init();
        }

        init() {
            if (this.slides.length <= 1) return;

            const activeIndex = Array.from(this.slides).findIndex(s => s.classList.contains('active'));
            if (activeIndex !== -1) this.currentSlide = activeIndex;

            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.next();
                });
            }
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.prev();
                });
            }

            this.startAuto();
        }

        showSlide(index) {
            if (this.isTransitioning) return;
            
            const nextIndex = (index + this.slides.length) % this.slides.length;
            if (nextIndex === this.currentSlide) return;

            this.isTransitioning = true;
            const currentSlide = this.slides[this.currentSlide];
            const nextSlide = this.slides[nextIndex];

            nextSlide.style.zIndex = "2";
            nextSlide.classList.add('active');
            currentSlide.style.zIndex = "1";
            
            setTimeout(() => {
                currentSlide.classList.remove('active');
                currentSlide.style.zIndex = "";
                nextSlide.style.zIndex = "1";
                this.currentSlide = nextIndex;
                this.isTransitioning = false;
            }, 1000);
        }

        next() {
            this.showSlide(this.currentSlide + 1);
            this.resetAuto();
        }

        prev() {
            this.showSlide(this.currentSlide - 1);
            this.resetAuto();
        }

        startAuto() {
            this.autoSlide = setInterval(() => this.next(), this.interval);
        }

        resetAuto() {
            clearInterval(this.autoSlide);
            this.startAuto();
        }
    }

    // Initialize Carousels
    new Carousel('hero-carousel', 6000);
    new Carousel('gallery-carousel', 4000);

    // 3. Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.reveal');
    const revealOnScroll = () => {
        revealElements.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            if (elementTop < window.innerHeight - 150) {
                el.classList.add('active');
            }
        });
    };
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();

    // 4. Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || href.startsWith('http') || href.includes('/')) return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // 5. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const navLinks = document.getElementById('nav-links');

    if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuBtn.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // 6. Language Switcher Logic
    const translations = {
        es: {
            "nav-home": "Inicio", "nav-about": "Nosotros", "nav-menu": "Carta", "nav-specialties": "Especialidades", "nav-location": "Ubicación", "nav-book": "Reservar",
            "tab-food": "Comidas", "tab-drinks": "Bebidas", "tab-cocktails": "Cócteles", "menu-cat-cocktails": "CÓCTELES",
            "404-title": "Mesa no encontrada", "404-text": "Lo sentimos, pero la página que buscas no está en nuestro menú.",
            "404-btn-home": "Volver al Inicio", "404-btn-menu": "Ver la Carta",
            "dish-alcachofa": "Alcachofa confitada", "dish-tortilla": "Tortilla española", "dish-ensaladilla": "Ensaladilla rusa", "dish-albondigas": "Albóndigas de ternera",
            "dish-mini-hamburguesa": "Mini hamburguesa especial", "dish-bao-carrillada": "Bao de carrillada", "dish-tartar-atun": "Taco de tartar de atún",
            "salad-gazpacho": "Gazpacho andaluz", "salad-burratina": "Ensalada de burratina", "meat-rabo-toro": "Milhojas de rabo de toro",
            "dessert-cheesecake": "Tarta de queso Payoyo", "dessert-brownie": "Brownie con helado", "dessert-apple-pie": "Tarta de manzana", "dessert-sorbet": "Sorbete de limón",
            "cocktail-mojito": "Mojito Clásico", "cocktail-pina-colada": "Piña Colada", "cocktail-espresso-martini": "Espresso Martini", 
            "cocktail-passion-martini": "Passion Martini", "cocktail-strawberry-fields": "Strawberry Fields (Sin alcohol)"
        },
        en: {
            "nav-home": "Home", "nav-about": "About Us", "nav-menu": "Menu", "nav-specialties": "Specialties", "nav-location": "Location", "nav-book": "Book Now",
            "tab-food": "Food", "tab-drinks": "Drinks", "tab-cocktails": "Cocktails", "menu-cat-cocktails": "COCKTAILS",
            "404-title": "Table not found", "404-text": "Sorry, but the page you are looking for is not on our menu.",
            "404-btn-home": "Back to Home", "404-btn-menu": "View Menu",
            "dish-alcachofa": "Confit Artichoke", "dish-tortilla": "Spanish Omelette", "dish-ensaladilla": "Russian Salad", "dish-albondigas": "Veal Meatballs",
            "dish-mini-hamburguesa": "Special Mini Burger", "dish-bao-carrillada": "Pork Cheek Bao", "dish-tartar-atun": "Tuna Tartare Taco",
            "salad-gazpacho": "Andalusian Gazpacho", "salad-burratina": "Burratina Salad", "meat-rabo-toro": "Oxtail Mille-feuille",
            "dessert-cheesecake": "Payoyo Cheesecake", "dessert-brownie": "Brownie with Ice Cream", "dessert-apple-pie": "Apple Pie", "dessert-sorbet": "Lemon Sorbet",
            "cocktail-mojito": "Classic Mojito", "cocktail-pina-colada": "Piña Colada", "cocktail-espresso-martini": "Espresso Martini", 
            "cocktail-passion-martini": "Passion Martini", "cocktail-strawberry-fields": "Strawberry Fields (Alcohol free)"
        }
    };

    const langLinks = document.querySelectorAll('.lang-link');
    const currentLangSpan = document.getElementById('current-lang');

    function changeLanguage(lang) {
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                el.textContent = translations[lang][key];
            }
        });
        if (currentLangSpan) currentLangSpan.textContent = lang.toUpperCase();
        localStorage.setItem('preferredLang', lang);
    }

    if (langLinks) {
        langLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const lang = link.getAttribute('data-lang');
                changeLanguage(lang);
            });
        });
    }

    const savedLang = localStorage.getItem('preferredLang') || 'es';
    if (savedLang !== 'es') changeLanguage(savedLang);

    // 7. Menu Tabs Logic
    const menuTabs = document.querySelectorAll('.menu-tab');
    const menuSections = document.querySelectorAll('.menu-section');

    if (menuTabs.length > 0) {
        menuTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-target');
                menuTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                menuSections.forEach(section => {
                    if (section.id === target) {
                        section.classList.add('active');
                        section.querySelectorAll('.reveal').forEach(el => el.classList.add('active'));
                    } else {
                        section.classList.remove('active');
                    }
                });
            });
        });
    }
});
