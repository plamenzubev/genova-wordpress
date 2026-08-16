<?php
/**
 * The footer: site footer widgets + closing tags.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<footer class="bg-espresso-2 pt-16 pb-8 text-cream/70">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
				<div>
					<a href="#top" class="flex items-center gap-2 font-display text-xl font-semibold text-cream">
						<span class="flex h-9 w-9 items-center justify-center rounded-full bg-gold text-espresso text-sm font-bold">ON</span>
						Osteria Nova
					</a>
					<p class="mt-4 max-w-xs text-sm">Автентична италианска кухня, приготвена с обич, в сърцето на София от 2010 г.</p>
					<div class="mt-6 flex gap-3">
						<a href="#" aria-label="Instagram" class="flex h-9 w-9 items-center justify-center rounded-full bg-cream/5 transition hover:bg-terracotta hover:text-cream">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4.2" stroke="currentColor" stroke-width="1.8"/><circle cx="17.2" cy="6.8" r="1.1" fill="currentColor"/></svg>
						</a>
						<a href="#" aria-label="Facebook" class="flex h-9 w-9 items-center justify-center rounded-full bg-cream/5 transition hover:bg-terracotta hover:text-cream">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M14 8.5h2V5.2c-.35-.05-1.55-.15-2.95-.15-2.92 0-4.92 1.83-4.92 5.2v2.8H5.2v3.7h2.93V22h3.7v-5.25h2.82l.45-3.7h-3.27v-2.4c0-1.07.29-1.85 1.87-1.85Z" fill="currentColor"/></svg>
						</a>
						<a href="#" aria-label="TikTok" class="flex h-9 w-9 items-center justify-center rounded-full bg-cream/5 transition hover:bg-terracotta hover:text-cream">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M14.5 3h2.2c.28 1.9 1.63 3.36 3.6 3.6v2.24c-1.31-.02-2.55-.42-3.6-1.1v6.1c0 3.05-2.47 5.52-5.52 5.52A5.52 5.52 0 0 1 5.66 14c0-2.95 2.3-5.36 5.22-5.51v2.28a3.24 3.24 0 0 0-2.98 3.23A3.24 3.24 0 0 0 11.14 17a3.24 3.24 0 0 0 3.24-3.24V3h.12Z" fill="currentColor"/></svg>
						</a>
					</div>
				</div>

				<div>
					<h4 class="font-display text-sm font-semibold uppercase tracking-wide text-cream">Навигация</h4>
					<ul class="mt-4 space-y-2.5 text-sm">
						<li><a href="#about" class="transition hover:text-cream">За нас</a></li>
						<li><a href="#menu" class="transition hover:text-cream">Меню</a></li>
						<li><a href="#gallery" class="transition hover:text-cream">Галерия</a></li>
						<li><a href="#testimonials" class="transition hover:text-cream">Отзиви</a></li>
						<li><a href="#contact" class="transition hover:text-cream">Резервация</a></li>
					</ul>
				</div>

				<div>
					<h4 class="font-display text-sm font-semibold uppercase tracking-wide text-cream">Контакти</h4>
					<ul class="mt-4 space-y-2.5 text-sm">
						<li>ул. „Виа Италия“ 24, София</li>
						<li>+359 2 123 4567</li>
						<li>rezervacii@osterianova.bg</li>
					</ul>
				</div>

				<div>
					<h4 class="font-display text-sm font-semibold uppercase tracking-wide text-cream">Бюлетин</h4>
					<p class="mt-4 text-sm">Абонирайте се за новини и специални оферти.</p>
					<form class="mt-4 flex gap-2" onsubmit="return false;">
						<input type="email" placeholder="Вашият имейл" class="w-full min-w-0 rounded-full border border-cream/15 bg-espresso px-4 py-2 text-sm text-cream placeholder:text-cream/30 outline-none focus:border-gold" />
						<button type="submit" class="shrink-0 rounded-full bg-terracotta px-4 py-2 text-sm font-semibold text-cream hover:bg-terracotta-dark">OK</button>
					</form>
				</div>
			</div>

			<div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-cream/10 pt-8 text-xs sm:flex-row">
				<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Osteria Nova. Всички права запазени.</p>
				<p>Дизайн и разработка от <a href="https://github.com/plamenzubev" target="_blank" rel="noreferrer" class="text-cream/90 underline decoration-terracotta underline-offset-4 hover:text-cream">Пламен Зубев</a></p>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
