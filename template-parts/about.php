<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$images     = osteria_nova_images();
$highlights = osteria_nova_highlights();
?>
<section id="about" class="bg-cream py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="grid items-center gap-16 lg:grid-cols-2">
			<div class="relative js-reveal" data-reveal>
				<div class="relative aspect-4/5 w-full max-w-md overflow-hidden rounded-3xl shadow-2xl">
					<img src="<?php echo esc_url( $images['about_interior'] ); ?>" alt="Интериор на Osteria Nova" class="h-full w-full object-cover" loading="lazy" />
				</div>
				<div class="absolute -bottom-10 -right-6 hidden aspect-square w-40 overflow-hidden rounded-2xl border-4 border-cream shadow-xl sm:block md:w-52">
					<img src="<?php echo esc_url( $images['about_accent'] ); ?>" alt="Гост, наслаждаващ се на вечеря в Osteria Nova" class="h-full w-full object-cover" loading="lazy" />
				</div>
			</div>

			<div class="js-reveal" data-reveal data-reveal-delay="100">
				<span class="inline-block font-sans text-sm font-semibold tracking-[0.2em] uppercase text-terracotta">Нашата история</span>
				<h2 class="mt-3 font-display text-3xl sm:text-4xl md:text-5xl font-medium leading-tight text-espresso">
					Три поколения италианска кулинарна традиция
				</h2>
				<p class="mt-4 text-base sm:text-lg text-espresso/70">
					Osteria Nova започна през 2010 г. като малко семейно бистро с една-единствена цел — да пренесе автентичния вкус на Италия у нас. Днес продължаваме да готвим по същите рецепти, с грижа за всяка подробност.
				</p>

				<ul class="mt-10 space-y-6">
					<?php foreach ( $highlights as $item ) : ?>
						<li class="flex gap-4">
							<span class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-olive/10 text-olive">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
							</span>
							<div>
								<h3 class="font-display text-lg font-medium text-espresso"><?php echo esc_html( $item['title'] ); ?></h3>
								<p class="mt-1 text-sm text-espresso/65"><?php echo esc_html( $item['description'] ); ?></p>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>
