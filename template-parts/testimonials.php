<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$testimonials = osteria_nova_testimonials();
?>
<section id="testimonials" class="bg-cream-2 py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="max-w-2xl mx-auto text-center js-reveal" data-reveal>
			<span class="inline-block font-sans text-sm font-semibold tracking-[0.2em] uppercase text-terracotta">Отзиви</span>
			<h2 class="mt-3 font-display text-3xl sm:text-4xl md:text-5xl font-medium leading-tight text-espresso">
				Какво споделят нашите гости
			</h2>
		</div>

		<div class="mt-14 grid gap-8 md:grid-cols-3">
			<?php foreach ( $testimonials as $index => $t ) : ?>
				<div class="js-reveal" data-reveal data-reveal-delay="<?php echo esc_attr( $index * 100 ); ?>">
					<div class="flex h-full flex-col rounded-2xl bg-cream p-8 shadow-sm ring-1 ring-espresso/5">
						<svg class="text-terracotta/40" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg>
						<div class="mt-4 flex gap-1 text-gold">
							<?php for ( $i = 0; $i < $t['rating']; $i++ ) : ?>
								<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
							<?php endfor; ?>
						</div>
						<p class="mt-4 flex-1 text-sm leading-relaxed text-espresso/75">"<?php echo esc_html( $t['quote'] ); ?>"</p>
						<div class="mt-6 flex items-center gap-3">
							<img src="<?php echo esc_url( $t['avatar'] ); ?>" alt="<?php echo esc_attr( $t['name'] ); ?>" class="h-11 w-11 rounded-full object-cover" loading="lazy" />
							<div>
								<div class="font-display text-sm font-medium text-espresso"><?php echo esc_html( $t['name'] ); ?></div>
								<div class="text-xs text-espresso/55"><?php echo esc_html( $t['role'] ); ?></div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
