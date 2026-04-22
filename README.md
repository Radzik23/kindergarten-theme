# Zakatek Odkrywcow - motyw WordPress

Niestandardowy motyw WordPress dla strony przedszkola **Zakatek Odkrywcow**.
Motyw bazuje na `_s` (Underscores), ale zawiera wlasne szablony, style i logike
pod konkretna strone placowki.

## Co zawiera strona

- Strone glowna z sekcjami: hero, o nas, misja, rekrutacja, opinie i kontakt
- Dedykowana podstrone `Rekrutacja` z formularzem i sekcja dokumentow
- Dedykowana podstrone `Kadra i Zespol` z rozbudowana prezentacja zalozycielki
- Dedykowana podstrone `Galeria Przedszkola` z filtrowaniem i lightboxem
- Dedykowana podstrone `Polityka Prywatnosci`
- Karuzele opinii rodzicow (Swiper)
- Modal RODO dla formularzy

## Funkcje motywu

- Wlasny typ wpisu `opinie` (opinie rodzicow)
- Wlasny typ wpisu `galeria_foto` (zdjecia do galerii)
- Wlasna taksonomia `kategoria_galerii` (kategorie filtrowania galerii)
- Warunkowe dolaczanie CSS/JS na wybranych podstronach
- Globalne style motywu + oddzielne style dla podstron
- Defer dla skryptow (z wyjatkiem krytycznych skryptow WP/jQuery)

## Wymagania

- WordPress 6.x
- PHP 7.4+ (zalecane 8.x)
- Node.js i npm (do narzedzi deweloperskich)
- Composer (do narzedzi lintujacych PHP)

### Wymagane wtyczki WordPress

- **Advanced Custom Fields (ACF)** - pola dla opinii (np. tresc, ocena, opis autora, zdjecie autora)
- **Contact Form 7** - formularze kontaktowe i rekrutacyjne

## Instalacja

1. Skopiuj motyw do katalogu:
   `wp-content/themes/zakatek-odkrywcow`
2. W panelu WordPress aktywuj motyw `Zakatek odkrywcow`.
3. Zainstaluj i aktywuj wymagane wtyczki (ACF, Contact Form 7).
4. Utworz strony i przypisz im odpowiednie szablony:
   - `Rekrutacja` -> `Template Name: Rekrutacja`
   - `Kadra i Zespol` -> `Template Name: Kadra i Zespol`
   - `Galeria Przedszkola` -> `Template Name: Galeria Przedszkola`
   - `Polityka Prywatnosci` -> `Template Name: Polityka Prywatnosci`
5. Uzupelnij tresci, rekordy CPT i obrazy w panelu WordPress.

## Struktura projektu (najwazniejsze pliki)

- `functions.php` - rejestracja CPT, taksonomii, enqueue skryptow i styli
- `front-page.php` - glowny landing page
- `style.css` - globalne style strony glownej
- `rekrutacja/page-rekrutacja.php` - szablon podstrony rekrutacji
- `kadra/page-kadra.php` - szablon podstrony kadry
- `gallery/page-gallery.php` - szablon podstrony galerii
- `polityka-prywatnosci/page-polityka.php` - szablon polityki prywatnosci
- `js/front-page.js` - scroll, modal RODO, swiper opinii, "czytaj wiecej"
- `js/header.js` - zachowanie naglowka i menu mobilnego

## Development

Zainstaluj zaleznosci:

```bash
composer install
npm install
```

Dostepne komendy:

- `composer lint:wpcs` - standardy kodu PHP (WordPress Coding Standards)
- `composer lint:php` - sprawdzenie skladni PHP
- `composer make-pot` - generowanie pliku tlumaczen
- `npm run lint:js` - lint JavaScript
- `npm run lint:scss` - lint SCSS
- `npm run compile:css` - kompilacja SCSS do CSS
- `npm run compile:rtl` - generowanie `style-rtl.css`

## Uwagi implementacyjne

- Swiper ladowany jest z CDN (`cdn.jsdelivr.net`).
- Czcionka Open Sans ladowana jest z Google Fonts.
- Dane formularzy sa obslugiwane przez Contact Form 7 i konfiguracje formularzy w panelu WP.
- Opinie i galeria opieraja sie o dane z panelu WP (CPT + ACF).
