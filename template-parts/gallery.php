<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$images = osteria_nova_images();
?>
<section id="gallery" class="bg-cream py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="max-w-2xl mx-auto text-center js-reveal" data-reveal>
			<span class="inline-block font-sans text-sm font-semibold tracking-[0.2em] uppercase text-terracotta">Галерия</span>
			<h2 class="mt-3 font-display text-3xl sm:text-4xl md:text-5xl font-medium leading-tight text-espresso">
				Момент от нашата кухня и трапезария
			</h2>
			<p class="mt-4 text-base sm:text-lg text-espresso/70">
				Разгледайте атмосферата, преди да резервирате своята маса при нас.
			</p>
		</div>

		<div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:gap-6">
			<?php foreach ( $images['gallery'] as $index => $src ) : ?>
				<div class="js-reveal <?php echo 0 === $index ? 'col-span-2 row-span-2' : ''; ?>" data-reveal data-reveal-delay="<?php echo esc_attr( $index * 60 ); ?>">
					<div class="group overflow-hidden rounded-2xl <?php echo 0 === $index ? 'aspect-square sm:aspect-4/3' : 'aspect-square'; ?>">
						<img src="<?php echo esc_url( $src ); ?>" alt="Кадър от Osteria Nova" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-110" />
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
