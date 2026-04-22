<?php
/**
 * Zakatek odkrywcow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zakatek_odkrywcow
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zakatek_odkrywcow_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Zakatek odkrywcow, use a find and replace
		* to change 'zakatek-odkrywcow' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'zakatek-odkrywcow', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'zakatek-odkrywcow' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'zakatek_odkrywcow_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'zakatek_odkrywcow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zakatek_odkrywcow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zakatek_odkrywcow_content_width', 640 );
}
add_action( 'after_setup_theme', 'zakatek_odkrywcow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zakatek_odkrywcow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'zakatek-odkrywcow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'zakatek-odkrywcow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zakatek_odkrywcow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zakatek_odkrywcow_scripts() {
	wp_enqueue_style( 'zakatek-odkrywcow-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'zakatek-odkrywcow-style', 'rtl', 'replace' );

	wp_enqueue_script( 'zakatek-odkrywcow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zakatek_odkrywcow_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function zarejestruj_opinie_cpt() {
    register_post_type('opinie', array(
        'labels' => array(
            'name' => 'Opinie',
            'singular_name' => 'Opinia',
            'add_new_item' => 'Dodaj nową opinię',
            'edit_item' => 'Edytuj opinię',
            'menu_name' => 'Opinie rodziców'
        ),
        'public' => true,
        'publicly_queryable' => false, // Nie chcemy, żeby opinia otwierała się jako oddzielna strona
        'exclude_from_search' => true, // Niech nie zaśmieca wyników wyszukiwania
        'show_ui' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title') // Użyjemy tylko tytułu jako imienia autora
    ));
}
add_action('init', 'zarejestruj_opinie_cpt');

function zaladuj_zasoby_motywu() {
 
    wp_enqueue_style( 
        'header-style', 
        get_template_directory_uri() . '/assets/css/header.css', 
        array(), 
        '1.0' 
    );
	
	wp_enqueue_style( 
		'footer-style', 
		get_template_directory_uri() . '/assets/css/footer.css', 
		array(), 
		'1.0' 
	);

  
    wp_enqueue_script( 
        'header-script', 
        get_template_directory_uri() . '/js/header.js', 
        array(), 
        '1.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'zaladuj_zasoby_motywu' );

/* =========================================
   ŁADOWANIE SKRYPTÓW I STYLÓW DLA KADRY
   ========================================= */
function podepnij_pliki_kadry() {
    // Sprawdzamy, czy jesteśmy na podstronie "kadra" (po jej nazwie skróconej/slug)
    if ( is_page('kadra') ) {
        
        // Podpięcie CSS
        wp_enqueue_style( 
            'kadra-style', 
            get_template_directory_uri() . '/kadra/page-kadra.css', 
            array(), 
            '1.0' 
        );

        // Podpięcie JS (ładujemy w stopce -> 'true')
        wp_enqueue_script( 
            'kadra-script', 
            get_template_directory_uri() . '/kadra/page-kadra.js', 
            array(), 
            '1.0', 
            true 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'podepnij_pliki_kadry' );

/* =========================================
   ŁADOWANIE SKRYPTÓW DLA STRONY GŁÓWNEJ
   ========================================= */
function podepnij_pliki_strony_glownej() {
    
    if ( is_front_page() ) {
        
        
        wp_enqueue_script( 
            'front-page-js', 
            get_template_directory_uri() . '/js/front-page.js', 
            array(), 
            '1.0',
            true 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'podepnij_pliki_strony_glownej' );

/* =========================================
   ŁADOWANIE SKRYPTÓW I STYLÓW DLA GALERII
   ========================================= */
function podepnij_pliki_galerii() {
    if ( is_page('galeria-przedszkola') ) {
        // CSS
        wp_enqueue_style( 'galeria-style', get_template_directory_uri() . '/gallery/page-gallery.css', array(), '1.0' );
        // JS (w stopce)
        wp_enqueue_script( 'galeria-script', get_template_directory_uri() . '/gallery/page-gallery.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'podepnij_pliki_galerii' );

/* =========================================
   ŁADOWANIE SKRYPTÓW I STYLÓW DLA REKRUTACJI
   ========================================= */
function podepnij_pliki_rekrutacji() {
    // Sprawdzamy czy to strona o uproszczonej nazwie 'rekrutacja'
    if ( is_page('rekrutacja') ) {
        // Podpinamy CSS
        wp_enqueue_style( 'rekrutacja-style', get_template_directory_uri() . '/rekrutacja/page-rekrutacja.css', array(), '1.0' );
        // Podpinamy JS w stopce (true)
        wp_enqueue_script( 'rekrutacja-script', get_template_directory_uri() . '/rekrutacja/page-rekrutacja.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'podepnij_pliki_rekrutacji' );

/* =========================================
   WŁASNY TYP POSTA: GALERIA ZDJĘĆ
   ========================================= */
function zarejestruj_galerie_zdjec() {
    
    // 1. Rejestrujemy "Kategorie Galerii" (to będą nasze filtry)
    register_taxonomy('kategoria_galerii', 'galeria_foto', array(
        'labels' => array(
            'name' => 'Kategorie Zdjęć',
            'add_new_item' => 'Dodaj nową kategorię',
            'new_item_name' => 'Nazwa nowej kategorii'
        ),
        'hierarchical' => true, // Działają jak standardowe kategorie (z checkboxami)
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'kategoria-galerii' ),
    ));

    // 2. Rejestrujemy zakładkę "Galeria" 
    register_post_type('galeria_foto', array(
        'labels' => array(
            'name' => 'Galeria Zdjęć',
            'singular_name' => 'Zdjęcie',
            'add_new' => 'Dodaj nowe zdjęcie',
            'add_new_item' => 'Dodaj nowe zdjęcie do galerii',
            'edit_item' => 'Edytuj zdjęcie',
            'all_items' => 'Wszystkie zdjęcia'
        ),
        'public' => true,
        'menu_position' => 5, // Pojawi się wysoko w menu, pod "Wpisami"
        'menu_icon' => 'dashicons-format-gallery', // Ikonka obrazka w menu
        'supports' => array('title', 'thumbnail'), // Potrzebujemy tylko tytułu i "Obrazka wyróżniającego"
        'has_archive' => false
    ));
}
add_action('init', 'zarejestruj_galerie_zdjec');

// Dodajemy wsparcie dla Obrazków Wyróżniających (jeśli jeszcze nie masz tego w motywie)
add_theme_support( 'post-thumbnails' );

/* =========================================
   ŁADOWANIE STYLÓW DLA POLITYKI PRYWATNOŚCI
   ========================================= */
function podepnij_pliki_polityki() {
    if ( is_page('polityka-prywatnosci') ) {
        wp_enqueue_style( 'polityka-style', get_template_directory_uri() . '/polityka-prywatnosci/page-polityka.css', array(), '1.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'podepnij_pliki_polityki' );

/* =========================================
   DODANIE CZCIONKI OPEN SANS Z GOOGLE FONTS
   ========================================= */
function podepnij_czcionke_open_sans() {
    // Pobieramy grubości: 400 (zwykła), 600 (półgruba), 700 (gruba)
    wp_enqueue_style( 'google-fonts-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'podepnij_czcionke_open_sans' );

/* =========================================
   DODANIE SWIPER JS (DO OPINII)
   ========================================= */
function podepnij_swiper() {
    // Styl CSS Swipera
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );
    // Skrypt JS Swipera
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'podepnij_swiper' );

// ==========================================
// OPÓŹNIENIE ŁADOWANIA SKRYPTÓW (DEFER) - Optymalizacja PageSpeed
// ==========================================
function zakatek_defer_scripts( $tag, $handle, $src ) {
    // Nie ruszamy panelu administratora, żeby nic nie zepsuć
    if ( is_admin() ) {
        return $tag;
    }
    // Zostawiamy w spokoju jQuery (główne biblioteki często muszą ładować się od razu)
    if ( strpos( $tag, 'jquery.min.js' ) || strpos( $tag, 'jquery.js' ) ) {
        return $tag;
    }
    // Dodajemy atrybut defer do wszystkich innych skryptów
    return str_replace( ' src', ' defer="defer" src', $tag );
}
add_filter( 'script_loader_tag', 'zakatek_defer_scripts', 10, 3 );