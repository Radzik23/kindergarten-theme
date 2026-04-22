<?php
/*
Template Name: Galeria Przedszkola
*/
get_header(); ?>

<main class="gallery-page-content" style="padding-top: 140px; padding-bottom: 80px; background-color: #fafaf9;">

    <section class="gallery-hero text-center" style="margin-bottom: 50px;">
        <div class="container">
            <span class="badge" style="display: inline-block; background-color: #dcfce7; color: #166534; padding: 6px 16px; border-radius: 20px; font-size: 0.75rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Wspomnienia</span>
            
            <h1 style="color: #0b2514; font-size: 3.5rem; font-weight: 800; margin-bottom: 20px; text-align: center;">Galeria Naszych Przygód</h1>
            
            <p style="color: #475569; font-size: 1.1rem; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                Uwieczniamy radosne chwile pełne odkryć, nauki i wspólnej zabawy. Zobacz, jak każdego dnia Twoje dziecko staje się małym odkrywcą w naszym bezpiecznym zakątku.
            </p>
        </div>
    </section>

    <section class="gallery-filters-section" style="margin-bottom: 40px;">
        <div class="container text-center">
            <div class="gallery-filters" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px;">
                <button class="filter-btn active" data-filter="all">Wszystkie</button>
                <button class="filter-btn" data-filter="sale">Nasze Sale</button>
                <button class="filter-btn" data-filter="ogrod">Zabawy w Ogrodzie</button>
                <button class="filter-btn" data-filter="wydarzenia">Wydarzenia</button>
            </div>
        </div>
    </section>

    <section class="gallery-grid-section" style="margin-bottom: 60px;">
        <div class="container">
            <div class="masonry-grid">
                
                <?php 
                // Zlecenie dla WordPressa: "Znajdź wszystkie wpisy z Galerii Zdjęć"
                $args = array(
                    'post_type' => 'galeria_foto',
                    'posts_per_page' => -1, // -1 oznacza pobranie wszystkich dodanych zdjęć
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $gallery_query = new WP_Query($args);

                // Jeśli znaleziono zdjęcia, wyświetlaj je jedno po drugim
                if ($gallery_query->have_posts()) :
                    while ($gallery_query->have_posts()) : $gallery_query->the_post();
                        
                        // Pobieranie kategorii zdjęcia (żeby filtry działały)
                        $terms = get_the_terms(get_the_ID(), 'kategoria_galerii');
                        $filter_classes = '';
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $filter_classes .= ' ' . $term->slug;
                            }
                        }

                        // Pobieranie samego obrazka wyróżniającego (w pełnym rozmiarze)
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                        
                        // Wyświetlamy kafelek tylko, jeśli dodano obrazek
                        if ($thumbnail_url) : ?>
                            
                            <div class="grid-item <?php echo $filter_classes; ?>">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            </div>

                        <?php endif;
                    endwhile;
                    wp_reset_postdata(); // Sprzątanie po pętli
                else : ?>
                    <p style="text-align: center; width: 100%;">Galeria jest w trakcie aktualizacji. Zapraszamy wkrótce!</p>
                <?php endif; ?>

            </div>

            <div class="load-more-wrapper text-center" style="margin-top: 50px;">
                <button id="load-more-btn" style="background-color: #f1f5f9; color: #0b2514; border: none; padding: 12px 30px; border-radius: 30px; font-weight: bold; cursor: pointer; transition: 0.3s;">
                    Załaduj więcej zdjęć ⬇
                </button>
            </div>
        </div>
    </section>

<section class="gallery-cta-section" style="margin-bottom: 60px;">
        <div class="container">
            <div class="cta-box text-center">
                <h2>Chcesz zobaczyć to na własne oczy?</h2>
                <p>Zapraszamy na dzień otwarty. Poznaj naszą kadrę, zobacz sale i dowiedz się więcej o naszej metodzie nauczania poprzez zabawę.</p>
                
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/#kontakt'); ?>" class="btn-dark">Umów spotkanie</a>
                    <a href="#" class="btn-light">Pobierz informator</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>