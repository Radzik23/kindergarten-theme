document.addEventListener('DOMContentLoaded', function() {
    
    // 1. POBIERANIE ELEMENTÓW
    const header = document.querySelector('.site-header');
    const hamburger = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav-links a');

    // 2. FUNKCJA SCROLLOWANIA (Zmiana koloru headera)
    function checkScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    // Nasłuchuj przewijania
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Uruchom na starcie

    // 3. OBSŁUGA HAMBURGERA
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function() {
            // ZMIANA: używamy 'active', żeby pasowało do Twojego CSS
            mobileMenu.classList.toggle('active');
            hamburger.classList.toggle('active'); 

            // Opcjonalnie: blokada scrolla przy otwartym menu
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // 4. ZAMYKANIE MENU PO KLIKNIĘCIU W LINK
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
});