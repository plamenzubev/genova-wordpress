<?php
/**
 * The header: <head>, opening <body>, sticky navigation.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Osteria Nova — съвременен италиански ресторант. Пресни съставки, автентични рецепти и топла атмосфера в сърцето на града. Резервирайте маса онлайн." />
	<meta name="theme-color" content="#231A15" />
	<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/favicon.svg' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-cream min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="fixed inset-x-0 top-0 z-50 transition-colors duration-300">
	<nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
		<a href="#top" class="flex items-center gap-2 font-display text-xl font-semibold text-cream">
			<span class="flex h-9 w-9 items-center justify-center rounded-full bg-gold text-espresso text-sm font-bold">ON</span>
			Osteria Nova
		</a>

		<div class="hidden items-center gap-8 lg:flex">
			<a href="#about" class="text-sm font-medium text-cream/80 transition hover:text-cream">За нас</a>
			<a href="#menu" class="text-sm font-medium text-cream/80 transition hover:text-cream">Меню</a>
			<a href="#gallery" class="text-sm font-medium text-cream/80 transition hover:text-cream">Галерия</a>
			<a href="#testimonials" class="text-sm font-medium text-cream/80 transition hover:text-cream">Отзиви</a>
			<a href="#contact" class="text-sm font-medium text-cream/80 transition hover:text-cream">Контакти</a>
		</div>

		<div class="hidden items-center gap-5 lg:flex">
			<a href="tel:+35921234567" class="flex items-center gap-2 text-sm font-medium text-cream/80 hover:text-cream">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
				+359 2 123 4567
			</a>
			<a href="#contact" class="rounded-full bg-terracotta px-5 py-2.5 text-sm font-semibold text-cream transition hover:bg-terracotta-dark">Резервирай маса</a>
		</div>

		<button id="nav-toggle" class="text-cream lg:hidden" aria-label="Отвори меню" aria-expanded="false">
			<svg id="icon-menu" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
			<svg id="icon-close" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
		</button>
	</nav>

	<div id="mobile-nav" class="hidden border-t border-cream/10 bg-espresso px-6 pb-6 lg:hidden">
		<div class="flex flex-col gap-4 pt-4">
			<a href="#about" class="mobile-nav-link text-base font-medium text-cream/85">За нас</a>
			<a href="#menu" class="mobile-nav-link text-base font-medium text-cream/85">Меню</a>
			<a href="#gallery" class="mobile-nav-link text-base font-medium text-cream/85">Галерия</a>
			<a href="#testimonials" class="mobile-nav-link text-base font-medium text-cream/85">Отзиви</a>
			<a href="#contact" class="mobile-nav-link text-base font-medium text-cream/85">Контакти</a>
			<a href="#contact" class="mobile-nav-link mt-2 rounded-full bg-terracotta px-5 py-3 text-center text-sm font-semibold text-cream">Резервирай маса</a>
		</div>
	</div>
</header>
