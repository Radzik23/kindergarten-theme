document.addEventListener('DOMContentLoaded', function() {
    
    const scrollBtn = document.getElementById('scroll-to-form');
    const formSection = document.getElementById('formularz-sekcja');

    if (scrollBtn && formSection) {
        scrollBtn.addEventListener('click', function() {
            // Obliczamy pozycję, uwzględniając lekki odstęp od góry
            const offsetTop = formSection.offsetTop - 100;
            
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        });
    }

});
// ==========================================
    // OBSŁUGA OKIENKA RODO
    // ==========================================
    const rodoModal = document.getElementById('rodo-modal');
    const openRodoBtn = document.getElementById('open-rodo-modal');
    const closeRodoBtn = document.getElementById('close-rodo-modal');

    if (rodoModal && openRodoBtn && closeRodoBtn) {
        // Otwieranie
        openRodoBtn.addEventListener('click', function(e) {
            e.preventDefault(); // Zapobiega przeładowaniu strony
            rodoModal.classList.add('active');
        });

        // Zamykanie przyciskiem
        closeRodoBtn.addEventListener('click', function() {
            rodoModal.classList.remove('active');
        });

        // Zamykanie kliknięciem w ciemne tło (poza białym okienkiem)
        rodoModal.addEventListener('click', function(e) {
            if (e.target === rodoModal) {
                rodoModal.classList.remove('active');
            }
        });
    }