document.addEventListener('DOMContentLoaded', function() {
    // Pobieramy wszystkie paski z pracownikami
    const headers = document.querySelectorAll('.team-member-header');

    headers.forEach(header => {
        header.addEventListener('click', () => {
            // Znajdujemy całą kartę pracownika (rodzica nagłówka)
            const memberCard = header.parentElement;
            
            // Ekstra funkcja: Zwiń inne otwarte karty, gdy klikasz nową (prawdziwy akordeon)
            document.querySelectorAll('.team-member').forEach(card => {
                if (card !== memberCard) {
                    card.classList.remove('active');
                }
            });

            // Rozwiń (lub zwiń) klikniętą kartę - to aktywuje nasz CSS (grid-template-rows)
            memberCard.classList.toggle('active');
        });
    });
});