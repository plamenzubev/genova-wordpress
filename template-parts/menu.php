<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$categories = osteria_nova_menu_categories();
?>
<section id="menu" class="bg-espresso py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="max-w-2xl mx-auto text-center js-reveal" data-reveal>
			<span class="inline-block font-sans text-sm font-semibold tracking-[0.2em] uppercase text-gold">Менюто ни</span>
			<h2 class="mt-3 font-display text-3xl sm:text-4xl md:text-5xl font-medium leading-tight text-cream">
				Ястия, приготвени с обич и традиция
			</h2>
			<p class="mt-4 text-base sm:text-lg text-cream/70">
				Всяко ястие в менюто ни разказва история — от прясна паста до пица, изпечена на дърва.
			</p>
		</div>

		<div class="mt-10 flex justify-center js-reveal" data-reveal data-reveal-delay="100">
			<div class="inline-flex flex-wrap justify-center gap-2 rounded-full border border-cream/15 bg-cream/5 p-1.5" id="menu-tabs">
				<?php foreach ( $categories as $index => $cat ) : ?>
					<button
						type="button"
						class="menu-tab rounded-full px-5 py-2 text-sm font-medium transition <?php echo 0 === $index ? 'bg-terracotta text-cream' : 'text-cream/65 hover:text-cream'; ?>"
						data-category="<?php echo esc_attr( $cat['id'] ); ?>"
					><?php echo esc_html( $cat['label'] ); ?></button>
				<?php endforeach; ?>
			</div>
		</div>

		<?php foreach ( $categories as $index => $cat ) : ?>
			<div class="menu-panel mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 <?php echo 0 === $index ? '' : 'hidden'; ?>" data-panel="<?php echo esc_attr( $cat['id'] ); ?>">
				<?php foreach ( $cat['items'] as $item ) : ?>
					<div class="group overflow-hidden rounded-2xl bg-cream/5 ring-1 ring-cream/10 transition hover:ring-terracotta/50">
						<div class="aspect-4/3 overflow-hidden">
							<img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
						</div>
						<div class="p-6">
							<div class="flex items-start justify-between gap-4">
								<h3 class="font-display text-lg font-medium text-cream"><?php echo esc_html( $item['name'] ); ?></h3>
								<span class="whitespace-nowrap font-display text-lg font-medium text-gold"><?php echo esc_html( $item['price'] ); ?> лв</span>
							</div>
							<p class="mt-2 text-sm text-cream/60"><?php echo esc_html( $item['description'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>
