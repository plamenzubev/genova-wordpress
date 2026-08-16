<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$images = osteria_nova_images();
$stats  = osteria_nova_stats();
?>
<section id="top" class="relative flex min-h-screen items-center overflow-hidden">
	<div class="absolute inset-0">
		<img src="<?php echo esc_url( $images['hero'] ); ?>" alt="Топла атмосфера в ресторант Osteria Nova" class="h-full w-full object-cover" loading="eager" />
		<div class="absolute inset-0 bg-gradient-to-t from-espresso via-espresso/70 to-espresso/40"></div>
	</div>

	<div class="relative z-10 mx-auto w-full max-w-7xl px-6 pt-32 pb-20 lg:px-8">
		<div class="max-w-2xl js-reveal" data-reveal>
			<div class="mb-6 flex items-center gap-2 text-gold">
				<?php for ( $i = 0; $i < 5; $i++ ) : ?>
					<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
				<?php endfor; ?>
				<span class="ml-2 text-sm font-medium text-cream/80">4.9 от 850+ отзива</span>
			</div>

			<h1 class="font-display text-4xl font-medium leading-[1.1] text-cream sm:text-5xl md:text-6xl">
				Вкус, който помниш дълго след последната хапка
			</h1>

			<p class="mt-6 max-w-lg text-lg text-cream/75">
				Автентична италианска кухня в сърцето на града — пресни съставки, домашно приготвена паста и рецепти, предавани с поколения.
			</p>

			<div class="mt-9 flex flex-wrap items-center gap-4">
				<a href="#contact" class="group flex items-center gap-2 rounded-full bg-terracotta px-7 py-3.5 text-sm font-semibold text-cream transition hover:bg-terracotta-dark">
					Резервирай маса
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition group-hover:translate-x-1"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</a>
				<a href="#menu" class="rounded-full border border-cream/30 px-7 py-3.5 text-sm font-semibold text-cream transition hover:bg-cream/10">
					Разгледай менюто
				</a>
			</div>
		</div>

		<div class="mt-16 grid grid-cols-2 gap-8 border-t border-cream/15 pt-8 sm:grid-cols-4 js-reveal" data-reveal>
			<?php foreach ( $stats as $stat ) : ?>
				<div>
					<div class="font-display text-2xl font-medium text-cream sm:text-3xl"><?php echo esc_html( $stat['value'] ); ?></div>
					<div class="mt-1 text-xs text-cream/60 sm:text-sm"><?php echo esc_html( $stat['label'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
