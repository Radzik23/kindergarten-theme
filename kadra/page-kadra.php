<?php
/*
Template Name: Kadra i Zespół
*/
get_header(); ?>

<main class="kadra-page-content" style="padding-top: 120px;">

    <header class="kadra-header text-center" style="margin-bottom: 50px;">
        <div class="container">
            <h1 style="color: #fff; font-size: 3rem; margin-bottom: 10px;"> <span style="color: #4ade80;">O mnie</span></h1>
            <p style="color: #e2e8f0; font-size: 1.2rem;">Poznaj osoby, z którymi Twoje dziecko będzie odkrywać świat.</p>
        </div>
    </header>

    <section class="founder-section" style="margin-bottom: 80px;">
        <div class="container founder-container">
            
            <div class="founder-text-box">
                <span class="hero-label" style="display: inline-block; color: #4ade80; border: 1px solid #4ade80; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 15px;">Założycielka i Dyrektor</span>
                <h2>Magda</h2>
                
                <p>Magda to założycielka przedszkola: Zakątek Odkrywców. Już od najmłodszych lat wiedziała, że chce pracować jako nauczyciel i dzielić się swoją pasją do nauki. Fascynacja światem przyrody zaprowadziła ją na studia biologiczne na Uniwersytecie Przyrodniczym we Wrocławiu. Tam zdobyła nie tylko wiedzę, ale też kwalifikacje pedagogiczne.</p>
                
                <p>Jej droga zawodowa zmieniła się po jednym wyjątkowym spotkaniu na placu zabaw. Obserwując małego chłopca zafascynowanego mrówkami, zrozumiała, jak ważne jest uwrażliwianie dzieci na otaczający świat już od najmłodszych lat.</p>
                
                <h3>W co wierzy i jak pracuje?</h3>
                <ul>
                    <li>Tworzy przestrzeń, w której dzieci czują się bezpieczne i mogą swobodnie odkrywać siebie.</li>
                    <li>W swojej pracy uczy zrozumienia, empatii i odpowiedzialności.</li>
                    <li>Wierzy, że nauka staje się przygodą.</li>
                </ul>

                <h3>Prywatnie:</h3>
                <p>Po pracy najczęściej można ją spotkać na wycieczkach rowerowych lub górskich szlakach. Fanka lotnictwa, Formuły 1 i Roberta Kubicy. Uwielbia muzykę na żywo – od brzmienia orkiestry symfonicznej po energię festiwali rockowych. Miłośniczka lodów, pączków i pizzy!</p>
            </div>

            <div class="founder-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kadra/selfie.jpg" alt="Ciocia Magda" class="gallery-img-main">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kadra/rower.jpg" alt="Hobby Magdy" class="gallery-img-side1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kadra/f1.jpg" alt="Praca Magdy" class="gallery-img-side2">
            </div>

        </div>
    </section>

<section class="team-accordion-section">
        <div class="container">
            <h2 class="text-center" style="color: #fff; margin-bottom: 40px; font-size: 2rem;">Więcej o mojej drodze...</h2>
            
            <div class="team-accordion-list">
                
                <div class="team-member">
                    <div class="team-member-header">
                        <div class="member-basic-info">
                            <div class="member-avatar" style="display: flex; align-items: center; justify-content: center; background-color: rgba(74, 222, 128, 0.1); color: #4ade80;">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                            </div>
                            <div>
                                <h3 class="member-name">Edukacja i Doświadczenie</h3>
                                <span class="member-role">Biolog z pedagogicznym powołaniem</span>
                            </div>
                        </div>
                        <div class="member-toggle-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#4ade80" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                    </div>
                    <div class="team-member-content">
                        <div class="content-inner">
                            <p>Z wykształcenia jestem biologiem – ukończyłam studia na Uniwersytecie Przyrodniczym we Wrocławiu, gdzie zdobyłam również kwalifikacje pedagogiczne.Przez kilka lat uczyłam biologii i pracowałam w laboratorium diagnostycznym, łącząc świat nauki z tym, co kocham najbardziej – pracą z ludźmi.</p>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-member-header">
                        <div class="member-basic-info">
                            <div class="member-avatar" style="display: flex; align-items: center; justify-content: center; background-color: rgba(74, 222, 128, 0.1); color: #4ade80;">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </div>
                            <div>
                                <h3 class="member-name">Inspiracja i Przełom</h3>
                                <span class="member-role">Historia o mrówkach</span>
                            </div>
                        </div>
                        <div class="member-toggle-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#4ade80" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                    </div>
                    <div class="team-member-content">
                        <div class="content-inner">
                            <p>Moja droga zawodowa zmieniła się na placu zabaw, gdy zauważyłam małego chłopca z dziecięcą fascynacją obserwującego wspinające się po drzewie mrówki]. To uświadomiło mi, jak kluczowe jest uwrażliwianie dzieci na otaczający świat i okazywanie szacunku do przyrody od najmłodszych lat. Zaciekawienie tego chłopca stało się moim największym bodźcem do działania.</p>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="team-member-header">
                        <div class="member-basic-info">
                            <div class="member-avatar" style="display: flex; align-items: center; justify-content: center; background-color: rgba(74, 222, 128, 0.1); color: #4ade80;">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                            <div>
                                <h3 class="member-name">Misja Zakątka</h3>
                                <span class="member-role">Miejsce zrodzone z marzeń</span>
                            </div>
                        </div>
                        <div class="member-toggle-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#4ade80" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                    </div>
                    <div class="team-member-content">
                        <div class="content-inner">
                            <p>Zakątek Odkrywców powstał z potrzeby serca – z marzenia o miejscu, gdzie dzieci dorastają w zgodzie ze sobą i otaczającym światem. Uczę empatii, odpowiedzialności i szacunku do emocji każdego dziecka. Dziś wiem, że to moje prawdziwe powołanie, a to miejsce to przestrzeń, gdzie nauka staje się prawdziwą przygodą.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>