document.addEventListener('DOMContentLoaded', function() {
    const rodoModal = document.getElementById('rodo-modal');
    const openBtn = document.getElementById('open-rodo-modal');
    const closeBtn = document.getElementById('close-rodo-modal');

    // Otwieranie
    if(openBtn && rodoModal) {
        openBtn.addEventListener('click', function(e) {
            e.preventDefault(); // Zapobiega przeładowaniu strony
            rodoModal.classList.add('active');
        });
    }

    // Zamykanie przyciskiem
    if(closeBtn && rodoModal) {
        closeBtn.addEventListener('click', function() {
            rodoModal.classList.remove('active');
        });
    }

    // Zamykanie po kliknięciu w ciemne tło poza okienkiem
    if(rodoModal) {
        rodoModal.addEventListener('click', function(e) {
            if (e.target === rodoModal) {
                rodoModal.classList.remove('active');
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // KULOODPORNE PŁYNNE PRZEWIJANIE (Wspiera pełne linki np. twojastrona.pl/#o-nas)
    // ==========================================
    
    // Znajdź wszystkie linki, które ZAWIERAJĄ znak '#' gdziekolwiek w adresie
    const scrollLinks = document.querySelectorAll('a[href*="#"]');

    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            
            // Sprawdzamy, czy link prowadzi do tej samej strony, na której obecnie jesteśmy
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
                location.hostname == this.hostname
            ) {
                // Wyciągamy samą końcówkę z krzyżykiem (np. "#o-nas")
                const targetId = this.hash;

                if (targetId) {
                    const targetSection = document.querySelector(targetId);

                    // Jeśli sekcja istnieje na tej stronie, jedziemy do niej!
                    if (targetSection) {
                        e.preventDefault(); // Blokujemy brzydki przeskok

                        // Wysokość Twojego przyklejonego menu (zmień, jeśli menu zasłania tytuł)
                        const headerHeight = 100; 

                        // Obliczenia matematyczne do płynnego zjazdu
                        const elementPosition = targetSection.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            }
        });
    });

});

document.addEventListener('DOMContentLoaded', function() {
    const swiperContainer = document.querySelector('.reviews-swiper');
    
    if (swiperContainer) {
        const swiper = new Swiper('.reviews-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            
            // ==========================================
            // ZMODYFIKOWANA SEKCJA AUTOPLAY
            // ==========================================
            autoplay: {
                delay: 4000, 
                // 1. KOMPUTERY: Zatrzymuje przesuwanie, gdy kursor myszy jest nad opinią
                pauseOnMouseEnter: true, 
                // 2. TELEFONY/OGÓLNE: Jeśli użytkownik dotknie karuzeli, przesunie ją palcem lub kliknie przycisk "Czytaj więcej", karuzela przestaje automatycznie uciekać
                disableOnInteraction: true, 
            },
            // ==========================================

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                }
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    
    // OBSŁUGA ROZWIJANIA OPINII ("Czytaj więcej")
    document.addEventListener('click', function(e) {
        
        if (e.target && e.target.classList.contains('read-more-btn')) {
            const btn = e.target;
            const card = btn.closest('.review-card');
            const swiperContainer = document.querySelector('.reviews-swiper');
            
            if (card) {
                // 1. Przełączamy stan karty (rozwinięta/zwinięta)
                card.classList.toggle('is-expanded');
                
                // 2. Zarządzanie tekstem przycisku i zachowaniem Swipera
                if (card.classList.contains('is-expanded')) {
                    // KARTA JEST ROZWIJANA:
                    btn.textContent = 'Zwiń';
                    
                    // Zatrzymujemy karuzelę (dajemy czas na czytanie)
                    if (swiperContainer && swiperContainer.swiper) {
                        swiperContainer.swiper.autoplay.stop(); 
                    }
                } else {
                    // KARTA JEST ZWIJANA:
                    btn.textContent = 'Czytaj więcej';
                    
                    // Sprawdzamy, czy na ekranie są jeszcze jakieś inne rozwinięte opinie
                    const expandedCards = document.querySelectorAll('.review-card.is-expanded');
                    
                    // Jeśli nie ma żadnych rozwiniętych opinii, wznawiamy automatyczne przewijanie!
                    if (expandedCards.length === 0 && swiperContainer && swiperContainer.swiper) {
                        swiperContainer.swiper.autoplay.start(); 
                    }
                }
            }
        }
    });

});