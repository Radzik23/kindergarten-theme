</main>

    <footer class="site-footer">
        <div class="footer-container">
            
            <div class="footer-col footer-brand">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="Logo" class="footer-logo-icon">
                    <span class="footer-logo-text">Zakątek Odkrywców</span>
                </div>
                <p class="footer-desc">
                    Tworzymy miejsce, w którym każde dziecko może odkrywać świat w bezpiecznej i kreatywnej atmosferze. Dołącz do naszej rodziny odkrywców!
                </p>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/zakatek.odkrywcow11" class="social-link" aria-label="Facebook">Facebook</a>
                    <a href="https://www.instagram.com/zakatek_odkrywcow/" class="social-link" aria-label="Instagram">Instagram</a>
                </div>
            </div>

            <div class="footer-col footer-links">
                <h3>Na skróty</h3>
                <ul>
                    <li><a href="<?php echo home_url('/#o-nas'); ?>">O nas</a></li>
                    <li><a href="<?php echo home_url('/#program'); ?>">Program edukacyjny</a></li>
                    <li><a href="<?php echo site_url('/kadra/') ?>">O mnie</a></li>
                    <li><a href="<?php echo home_url('/#opinie'); ?>">Opinie</a></li>
                    <li><a href="<?php echo home_url('/#rekrutacja'); ?>">Cennik</a></li>
                </ul>
            </div>

            <div class="footer-col footer-contact">
                <h3>Skontaktuj się</h3>
                <ul class="contact-list">
                    <li>
                        <span class="icon">📍</span> 
                        <span>ul. Strońska 11A<br>50-540 Wrocław</span>
                    </li>
                    <li>
                        <span class="icon">📞</span> 
                        <a href="tel:+48663276975">+48 663 276 975</a>
                    </li>
                    <li>
                        <span class="icon">✉️</span> 
                        <a href="mailto:kontakt@zakatek-odkrywcow.pl">kontakt@zakatek-odkrywcow.pl</a>
                    </li>
                    <li>
                        <span class="icon">🕒</span> 
                        <span>Pn - Pt: 06:40 - 17:00</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-container">
                <p>&copy; <?php echo date('Y'); ?> Zakątek Odkrywców. Wszelkie prawa zastrzeżone.</p>
                <div class="footer-legal">
                    <a href="<?php echo home_url('/polityka-prywatnosci/'); ?>">Polityka Prywatności</a>
                    <span class="separator">|</span>
                    <!-- <a href="#">Regulamin</a> -->
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>