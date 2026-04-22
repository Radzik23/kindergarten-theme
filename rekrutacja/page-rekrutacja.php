<?php
/*
Template Name: Rekrutacja
*/
get_header(); ?>

<div id="rodo-modal" class="rodo-modal-overlay">
    <div class="rodo-modal-content">
        <h3>Informacja o przetwarzaniu danych</h3>
        <p>Twoje dane osobowe podane w formularzu są przetwarzane wyłącznie w celu przeprowadzenia procesu rekrutacji i udzielenia odpowiedzi na Twoje zapytanie.</p>
        <p>Administratorem danych jest przedszkole <strong>Zakątek Odkrywców</strong>. Dane nie są udostępniane osobom trzecim i nie są wykorzystywane do celów marketingowych bez wyraźnej zgody.</p>
        <button type="button" id="close-rodo-modal" class="btn-primary" style="margin-top: 20px; padding: 10px 20px; border-radius: 8px; border: none; cursor: pointer;">Zamknij</button>
    </div>
</div>

<main class="recruitment-page" style="background-color: #fafaf9; padding-top: 140px; padding-bottom: 80px;">

    <section class="recruitment-hero container">
        <div class="hero-content">
            <span class="badge">DOŁĄCZ DO NAS</span>
            <h1>Zostańmy Odkrywcami! Rekrutacja na rok szkolny</h1>
            <p>Zapraszamy rodziców do dołączenia do naszej wyjątkowej społeczności. Wypełnij formularz i rozpocznij przygodę swojego dziecka w Zakątku Odkrywców - miejscu, gdzie ciekawość spotyka się z troską.</p>
            <div class="hero-buttons">
                <button id="scroll-to-form" class="btn-primary">Wypełnij formularz</button>
                <a href="<?php echo home_url('/#rekrutacja'); ?>" class="btn-outline">Poznaj ofertę</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kadra/selfie.jpg" alt="Dziecko w przedszkolu">
        </div>
    </section>

    <section class="recruitment-steps container">
        <h2 class="section-title text-center">Jak dołączyć do naszej rodziny w 4 prostych krokach</h2>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">📄</div>
                <h3>Krok 1: Wypełnij formularz</h3>
                <p>Prześlij nam swoje zgłoszenie online za pomocą intuicyjnego formularza poniżej.</p>
            </div>
            <div class="step-card">
                <div class="step-icon">☕</div>
                <h3>Krok 2: Spotkanie zapoznawcze</h3>
                <p>Zapraszamy na wspólną kawę i rozmowę, abyśmy mogli się lepiej poznać i odpowiedzieć na pytania.</p>
            </div>
            <div class="step-card">
                <div class="step-icon">🧸</div>
                <h3>Krok 3: Dni adaptacyjne</h3>
                <p>Twoje dziecko spędzi u nas czas, poznając nowe otoczenie w przyjaznej, bezstresowej atmosferze.</p>
            </div>
            <div class="step-card">
                <div class="step-icon">🎉</div>
                <h3>Krok 4: Witamy na pokładzie!</h3>
                <p>Gratulacje! Twoje dziecko staje się częścią naszej rodziny Zakątka Odkrywców.</p>
            </div>
        </div>
    </section>

    <section class="recruitment-documents container" id="pdf">
        <h2 class="section-title text-center">Niezbędne dokumenty</h2>
        <div class="docs-grid">
            <div class="doc-card text-center">
                <div class="doc-icon">📕</div>
                <h3>Statut Przedszkola</h3>
                <span class="doc-size">PDF • 2.4 MB</span>
                <a href="#" class="btn-download">⬇ Pobierz</a>
            </div>
            <div class="doc-card text-center">
                <div class="doc-icon">📗</div>
                <h3>Cennik 2026/2027</h3>
                <span class="doc-size">PNG • 1.1 MB</span>
                <a href="https://zakatek-odkrywcow.pl/wp-content/uploads/2026/03/4-1.jpg" target="_blank" class="btn-download">⬇ Pobierz</a>
            </div>
        </div>
    </section>

    <section id="formularz-sekcja" class="recruitment-form-section container">
        <div class="form-card">
            <h2 class="text-center">Wypełnij formularz niezobowiązujący</h2>
            
            <div class="cf7-rekrutacja-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="6dbca75" title="Untitled"]'); ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>