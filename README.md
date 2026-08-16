# Osteria Nova — WordPress theme

Portfolio project: the same landing page for the fictional Italian restaurant "Osteria Nova" — a visual and functional twin of the [React version](https://github.com/plamenzubev/genova-react), this time built as a classic custom WordPress theme (PHP templates, no page builder).

## Why a custom theme instead of Elementor/Gutenberg

The goal of this project is to demonstrate real WordPress theme development — the PHP template hierarchy, asset enqueueing, an AJAX form with server-side validation — rather than assembling pre-made blocks. The code is fully version-controlled and readable on GitHub, unlike content stored in a page builder's database.

## What this project demonstrates

- A classic PHP theme (`header.php` / `footer.php` / `front-page.php` / `template-parts/*`)
- Content (menu, testimonials, gallery) structured in `inc/content.php` — easy to extend with ACF or custom post types
- A real AJAX reservation form: server-side validation + `wp_mail()` to the admin email (`inc/reservation-ajax.php`), nonce-protected
- Menu category tabs and scroll animations built with vanilla JS (`assets/js/main.js`) — no jQuery dependency
- Tailwind CSS v4, compiled at build time (`npm run build`) — no Node dependency on the hosting server
- Responsive, cross-browser layout, visually identical to the React version

## Tech stack

- PHP 8+ / WordPress 6.4+
- Tailwind CSS v4 (build tool only, not a runtime dependency)
- Vanilla JavaScript (no client-side framework)

## Local development

Requires a local WordPress install (e.g. [Local by Flywheel](https://localwp.com/), XAMPP, Laragon, or similar).

1. Place the theme folder at `wp-content/themes/osteria-nova`
2. Activate the theme under Appearance → Themes
3. To work on styles:

```bash
npm install
npm run build     # one-off build
npm run watch      # rebuild automatically on change
```

## Note

The reservation form genuinely sends an email via `wp_mail()` — on real hosting with mail/SMTP configured, it works out of the box with no extra plugins.

---

Design & development: [Plamen Zubev](https://github.com/plamenzubev)
