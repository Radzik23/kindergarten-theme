<?php
/**
 * The template for displaying the front page.
 *
 * @package Przedszkole_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/img/background.png">

    <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/background.png');">
        
        <div class="hero-overlay"></div>

        <div class="hero-container">
            
            <div class="hero-content">
                <span class="hero-label">+ ZAPISY NA ROK 2026 OTWARTE</span>
                
                <h1 class="hero-title">
                    Zakątek Odkrywców<br>
                    <span class="highlight">Razem odkrywajmy świat!</span>
                </h1>
                
                <p class="hero-description">
                    Miejsce, gdzie Twoje dziecko rozwija się w rytmie natury. 
                    Kameralne grupy, indywidualne podejście i mnóstwo zabawy z dala od ekranów.
                </p>

                <div class="hero-buttons">
                    <a href="<?php echo site_url('rekrutacja') ?>" class="btn btn-primary">Zapisz dziecko</a>
                    <a href="<?php echo home_url('/#misja'); ?>" class="btn btn-outline">Zobacz program</a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <strong>15+</strong> <span>lat doświadczenia</span>
                    </div>
                    <div class="stat-item">
                        <strong>200+</strong> <span>szczęśliwych dzieci</span>
                    </div>
                    <div class="stat-item">
                        <strong>100%</strong> <span>bezpieczeństwa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="o-nas" class="section-philosophy">
    <div class="container philosophy-container">
        
        <div class="philosophy-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/misja/kazik.jpg" alt="Nauczycielka i dziecko" class="philosophy-main-img" width="800" height="600" loading="lazy">
            
            <div class="bulb-badge">
                💡
            </div>
        </div>

        <div class="philosophy-content">
            <header class="section-header">
                <span class="section-subtitle">— O NAS</span>
                <h2 class="section-title">
                    Zakątek Odkrywców:<br>
                    <span class="highlight">Przedszkole blisko dziecka</span>
                </h2>
                <p class="section-description">
                    Jesteśmy kameralnym przedszkolem na wrocławskim Gaju, stworzonym z myślą o rodzinach szukających zrozumienia i troski. Kierujemy się podejściem bliskościowym – uważnością na emocje, potrzeby i tempo rozwoju każdego dziecka.
                </p>
            </header>

            <ul class="philosophy-features">
                
                <li>
                    <div class="feature-icon">🧸</div>
                    <div class="feature-text">
                        <strong>Małe, kameralne grupy</strong>
                        <p>Pozwalają nam naprawdę poznać każde dziecko i zbudować z nim relację.</p>
                    </div>
                </li>

                <li>
                    <div class="feature-icon">❤️</div>
                    <div class="feature-text">
                        <strong>Indywidualne podejście</strong>
                        <p>Dostosowujemy tempo do potrzeb i możliwości każdego malucha.</p>
                    </div>
                </li>

                <li>
                    <div class="feature-icon">🏡</div>
                    <div class="feature-text">
                        <strong>Domowa atmosfera</strong>
                        <p>Pełna ciepła i akceptacji, w której dzieci czują się bezpiecznie jak u siebie.</p>
                    </div>
                </li>

                <li>
                    <div class="feature-icon">🎨</div>
                    <div class="feature-text">
                        <strong>Nauka przez zabawę</strong>
                        <p>Wierzymy, że najlepiej uczymy się w ruchu, działaniu i doświadczaniu.</p>
                    </div>
                </li>

                <li>
                    <div class="feature-icon">🌿</div>
                    <div class="feature-text">
                        <strong>Bliskość natury</strong>
                        <p>Uczymy uważności na przyrodę, szacunku dla zwierząt i troski o rośliny.</p>
                    </div>
                </li>

                <li>
                    <div class="feature-icon">🤝</div>
                    <div class="feature-text">
                        <strong>Współpraca z Rodzicami</strong>
                        <p>Oparta na szczerości, partnerstwie i zaufaniu. Gramy do jednej bramki.</p>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</section>

<section id="misja" class="section-mission">
    <div class="container">

        <header class="mission-header">
            <span class="section-subtitle">NASZE WARTOŚCI</span>
            <h2 class="section-title">Nasza Misja</h2>
            <p class="section-description">
                W Zakątku Odkrywców wierzymy, że każde dziecko ma w sobie naturalną ciekawość świata, którą wspólnie rozwijamy dzień po dniu.
            </p>
        </header>

        <div class="mission-grid">

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">🌿</span>
                </div>
                <h3>Jesteśmy blisko dziecka</h3>
                <p>Uważnie towarzyszymy mu w odkrywaniu świata, emocji i relacji.</p>
            </article>

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">💬</span>
                </div>
                <h3>Uczymy rozumienia emocji</h3>
                <p>Pokazujemy, że wszystkie emocje są ważne. Pomagamy je nazwać, zrozumieć i wyrazić.</p>
            </article>

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">🤝</span>
                </div>
                <h3>Wychowujemy z szacunkiem</h3>
                <p>Opieramy się na pozytywnej dyscyplinie, wyznaczaniu bezpiecznych granic i konsekwencji zamiast kar.</p>
            </article>

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">🏡</span>
                </div>
                <h3>Tworzymy domową atmosferę</h3>
                <p>Pełną ciepła, spokoju i akceptacji, w której dzieci czują się bezpiecznie i swobodnie.</p>
            </article>

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">👩‍👧‍👦</span>
                </div>
                <h3>Współpracujemy z Rodzicami</h3>
                <p>Wierzymy, że wspólny kierunek działania i bliska relacja budują stabilne wsparcie dla dziecka.</p>
            </article>

            <article class="mission-card">
                <div class="card-icon-wrapper">
                    <span class="emoji-icon">🌎</span>
                </div>
                <h3>Uczymy uważności na naturę</h3>
                <p>Rozwijamy wrażliwość na przyrodę, troskę o zwierzęta i szacunek do naszej planety.</p>
            </article>

        </div>

        <div class="mission-footer">
            <p class="mission-summary">
                ✨ Pomagamy dzieciom odkrywać świat i siebie – bo każde dziecko ma w sobie potencjał, który wystarczy mądrze wspierać.
            </p>
        </div>

    </div>
</section>

<section id="rekrutacja" class="section-recruitment">
    <div class="container recruitment-grid">

        <div class="recruitment-left">
            <span class="section-subtitle">REKRUTACJA</span>
            <h2 class="section-title">Jak dołączyć?</h2>

            <div class="steps-wrapper">
                <div class="steps-line"></div>

                <div class="step-item">
                    <div class="step-number active">1</div>
                    <div class="step-content">
                        <h3>Skontaktuj się</h3>
                        <p>Zadzwoń lub wypełnij formularz, aby umówić się na spotkanie.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Odwiedź nas</h3>
                        <p>Przyjdź z dzieckiem, zobacz sale i poznaj naszą kadrę.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Zapisz dziecko</h3>
                        <p>Wypełnij dokumenty i witaj w Zakątku Odkrywców!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="recruitment-right">
            <div class="pricing-card">
                
                <div class="pricing-header">
                    <h3>Nasze pakiety pobytu:</h3>
                </div>

                <div class="packages-list">
                    
                    <div class="package-item">
                        <div class="pkg-icon">🌸</div>
                        <div class="pkg-info">
                            <span class="pkg-name">Mały Odkrywca</span>
                            <span class="pkg-time">do 6 godzin dziennie</span>
                        </div>
                        <div class="pkg-price">1200 zł</div>
                    </div>

                    <div class="package-item highlight-pkg"> <div class="pkg-icon">☀️</div>
                        <div class="pkg-info">
                            <span class="pkg-name">Odkrywca Dnia</span>
                            <span class="pkg-time">6 - 10 godzin dziennie</span>
                        </div>
                        <div class="pkg-price">1500 zł</div>
                    </div>

                    <div class="package-item">
                        <div class="pkg-icon">🌳</div>
                        <div class="pkg-info">
                            <span class="pkg-name">Wielki Odkrywca</span>
                            <span class="pkg-time">ponad 10 godzin dziennie</span>
                        </div>
                        <div class="pkg-price">1700 zł</div>
                    </div>

                    <div class="package-item">
                        <div class="pkg-icon">🦋</div>
                        <div class="pkg-info">
                            <span class="pkg-name">Elastyczny Odkrywca</span>
                            <span class="pkg-time">3 dni w tygodniu</span>
                        </div>
                        <div class="pkg-price">1300 zł</div>
                    </div>

                </div>

                <hr class="pricing-divider">

                <h4 class="features-title">W cenie każdego pakietu:</h4>
                <ul class="pricing-features">
                    <li>Zajęcia dodatkowe (angielski, sport, rytmika)</li>
                    <li>Realizacja podstawy programowej</li>
                    <li>Opieka wykwalifikowanej kadry</li>
                    <li>Indywidualne podejście</li>
                    <li>Małe, 12-osobowe grupy</li>
                </ul>

                <div class="pricing-extra">
                    <div class="extra-row">
                        <span>Wyżywienie (catering)</span>
                        <strong>26,50 zł / dzień</strong>
                    </div>
                    <div class="extra-row">
                        <span>Wpisowe (jednorazowo)</span>
                        <strong>600 zł</strong>
                    </div>
                </div>

                <a href="<?php echo site_url('rekrutacja') ?>" class="btn btn-full-white">Skontaktuj się w sprawie miejsca</a>
            </div>
        </div>

    </div>
</section>

    <section id="opinie" class="reviews-section">
    <div class="container">
        <div class="section-header">
            <h2>Co mówią rodzice?</h2>
        </div>

        <div class="swiper reviews-swiper">
            <div class="swiper-wrapper">
                
                <?php
                // Pobieramy WSZYSTKIE opinie (-1)
                $args = array(
                    'post_type' => 'opinie',
                    'posts_per_page' => -1,
                'post_status' => 'publish'
            );
            $opinie = new WP_Query($args);

                if ($opinie->have_posts()) :
                    while ($opinie->have_posts()) : $opinie->the_post();
                        $tresc = get_field('tresc_opinii');
                        $ocena = get_field('ocena');
                        $opis = get_field('opis_autora');
                        $foto = get_field('zdjecie_autora');
                        $imie = get_the_title(); 
                ?>
                    
                    <div class="swiper-slide">
                        <div class="review-card">
                    
                            <div class="review-top">
                                <div class="stars">
                                    <?php 
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo ($i <= $ocena) ? '<span class="star filled">★</span>' : '<span class="star empty">☆</span>';
                                    }
                                    ?>
                                </div>
                                <div class="quote-mark">"</div>
                            </div>

                            <div class="review-text-wrapper">
                                <p class="review-content">"<?php echo esc_html($tresc); ?>"</p>
                                <?php if (mb_strlen(strip_tags($tresc)) > 150) : // Pokazuje przycisk, jeśli opina jest długa ?>
                                    <button type="button" class="read-more-btn">Czytaj więcej</button>
                                <?php endif; ?>
                            </div>

                                    <div class="review-author">
                                <div class="author-img">
                                    <?php if ($foto) : ?>
                                        <img src="<?php echo esc_url($foto['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($imie); ?>" width="150" height="150" loading="lazy">
                                    <?php else : ?>
                                        <div class="avatar-placeholder"><?php echo substr($imie, 0, 1); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="author-details">
                                    <h4><?php echo esc_html($imie); ?></h4>
                                    <span><?php echo esc_html($opis); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php 
                    endwhile; 
                    wp_reset_postdata();
                else : 
                    echo '<p class="no-reviews">Brak opinii do wyświetlenia.</p>';
                endif; 
                ?>

            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section id="kontakt" class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
            
                <div class="contact-left">
                    <h2>Skontaktuj się z nami</h2>
                    <p class="subtitle">Masz pytania? Chcesz zobaczyć przedszkole? Napisz lub zadzwoń!</p>
                
                    <a href="tel:+48663276975" class="phone-number">+48 663 276 975</a>

                    <div class="cf7-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="5c14998" title="Contact form 1"]'); ?>
                    </div>
                </div>

                <div class="contact-right">
                    <div class="map-container">
                        <iframe
                            title="Mapa dojazdu do Zakątka Odkrywców"
                            src="https://maps.google.com/maps?q=Zakątek+Odkrywców,+ul.+Strońska+11A,+Wrocław&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>

                    <div class="contact-footer-info">
                        <div class="info-item">
                            <span class="icon">✉️</span> przedszkole.odkrywcow11@gmail.com
                        </div>
                        <div class="info-item">
                            <span class="icon">🕒</span> Pn - Pt: 06:40 - 17:00
                        </div>
                        <div class="map-overlay">
                            <span class="icon-pin">📍</span> ul. Strońska 11A, Wrocław
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="rodo-modal" class="rodo-modal-overlay">
            <div class="rodo-modal-content">
                <h3>Informacja o przetwarzaniu danych</h3>
                <p>Twoje dane osobowe (imię, adres e-mail, numer telefonu i treść wiadomości) są przetwarzane wyłącznie w celu odpowiedzi na przesłane zapytanie poprzez formularz kontaktowy.</p>
                <p>Administratorem danych jest przedszkole <strong>Zakątek Odkrywców</strong>. Dane nie są udostępniane osobom trzecim i nie są wykorzystywane do celów marketingowych.</p>
                <button type="button" id="close-rodo-modal" class="btn btn-primary" style="margin-top: 20px; padding: 10px 20px; background-color: #4ade80; color: #0b2514; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">Zamknij</button>
            </div>
        </div>
    </section>
</main><?php
get_footer();