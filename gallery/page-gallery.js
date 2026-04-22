document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // 1. OBSŁUGA FILTRÓW (Przyciski)
    // ==========================================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const gridItems = document.querySelectorAll('.grid-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Zdejmij zielony kolor ze wszystkich przycisków
            filterBtns.forEach(button => button.classList.remove('active'));
            // Dodaj zielony kolor tylko do klikniętego
            btn.classList.add('active');

            // Sprawdź, jaka to kategoria
            const filterValue = btn.getAttribute('data-filter');

            // Pokazuj lub ukrywaj zdjęcia
            gridItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.classList.remove('hide'); // Pokaż
                } else {
                    item.classList.add('hide'); // Ukryj
                }
            });
        });
    });

    // ==========================================
    // 2. LIGHTBOX (Powiększanie zdjęć)
    // ==========================================
    // Tworzymy "ciemne tło" w locie (nie musisz tego pisać w HTML)
    const lightbox = document.createElement('div');
    lightbox.id = 'gallery-lightbox';
    document.body.appendChild(lightbox);

    // Tworzymy puste miejsce na duże zdjęcie
    const lightboxImg = document.createElement('img');
    lightbox.appendChild(lightboxImg);

    // Co się dzieje po kliknięciu w miniaturkę?
    gridItems.forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img');
            lightboxImg.src = img.src; // Kopiujemy URL zdjęcia
            lightbox.classList.add('active'); // Pokazujemy ciemne tło
        });
    });

    // Co się dzieje po kliknięciu w ciemne tło (zamykanie)?
    lightbox.addEventListener('click', (e) => {
        // Zamykaj tylko jeśli kliknięto w tło, a nie w samo zdjęcie
        if (e.target !== lightboxImg) {
            lightbox.classList.remove('active');
        }
    });

    // ==========================================
    // 3. PRZYCISK "ZAŁADUJ WIĘCEJ" (Tymczasowy)
    // ==========================================
    const loadMoreBtn = document.getElementById('load-more-btn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            alert('Gotowe na podpięcie ładowania kolejnych zdjęć!');
        });
    }
});