<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hours = osteria_nova_opening_hours();
?>
<section id="contact" class="bg-espresso py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="max-w-2xl mx-auto text-center js-reveal" data-reveal>
			<span class="inline-block font-sans text-sm font-semibold tracking-[0.2em] uppercase text-gold">Резервация</span>
			<h2 class="mt-3 font-display text-3xl sm:text-4xl md:text-5xl font-medium leading-tight text-cream">
				Запазете маса за незабравимо изживяване
			</h2>
			<p class="mt-4 text-base sm:text-lg text-cream/70">
				Попълнете формата и ще потвърдим резервацията ви до 30 минути в работно време.
			</p>
		</div>

		<div class="mt-16 grid gap-12 lg:grid-cols-5">
			<div class="lg:col-span-2 js-reveal" data-reveal>
				<div class="flex h-full flex-col justify-between rounded-3xl bg-cream/5 p-8 ring-1 ring-cream/10">
					<div class="space-y-6">
						<div class="flex gap-4">
							<svg class="mt-1 shrink-0 text-gold" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
							<div>
								<div class="font-medium text-cream">Адрес</div>
								<p class="text-sm text-cream/60">ул. „Виа Италия“ 24, София</p>
							</div>
						</div>
						<div class="flex gap-4">
							<svg class="mt-1 shrink-0 text-gold" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
							<div>
								<div class="font-medium text-cream">Телефон</div>
								<p class="text-sm text-cream/60">+359 2 123 4567</p>
							</div>
						</div>
						<div class="flex gap-4">
							<svg class="mt-1 shrink-0 text-gold" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/></svg>
							<div>
								<div class="font-medium text-cream">Имейл</div>
								<p class="text-sm text-cream/60">rezervacii@osterianova.bg</p>
							</div>
						</div>
						<div class="flex gap-4">
							<svg class="mt-1 shrink-0 text-gold" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							<div>
								<div class="font-medium text-cream">Работно време</div>
								<ul class="mt-1 space-y-0.5 text-sm text-cream/60">
									<?php foreach ( $hours as $oh ) : ?>
										<li class="flex justify-between gap-4">
											<span><?php echo esc_html( $oh['day'] ); ?></span>
											<span><?php echo esc_html( $oh['hours'] ); ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="lg:col-span-3 js-reveal" data-reveal data-reveal-delay="100">
				<form id="reservation-form" novalidate class="grid gap-5 rounded-3xl bg-cream/5 p-8 ring-1 ring-cream/10 sm:grid-cols-2">
					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Име и фамилия</span>
						<input type="text" name="name" placeholder="Иван Иванов" class="reservation-input w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream placeholder:text-cream/30 outline-none transition focus:border-gold" />
						<span class="field-error mt-1 block text-xs text-terracotta"></span>
					</label>

					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Имейл</span>
						<input type="email" name="email" placeholder="ivan@email.com" class="reservation-input w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream placeholder:text-cream/30 outline-none transition focus:border-gold" />
						<span class="field-error mt-1 block text-xs text-terracotta"></span>
					</label>

					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Телефон</span>
						<input type="tel" name="phone" placeholder="+359 88 123 4567" class="reservation-input w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream placeholder:text-cream/30 outline-none transition focus:border-gold" />
						<span class="field-error mt-1 block text-xs text-terracotta"></span>
					</label>

					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Брой гости</span>
						<select name="guests" class="w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream outline-none transition focus:border-gold">
							<?php for ( $i = 1; $i <= 10; $i++ ) : ?>
								<option value="<?php echo esc_attr( $i ); ?>" <?php selected( $i, 2 ); ?>><?php echo esc_html( $i ); ?> <?php echo 1 === $i ? 'гост' : 'гости'; ?></option>
							<?php endfor; ?>
						</select>
					</label>

					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Дата</span>
						<input type="date" name="date" class="reservation-input w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream outline-none transition focus:border-gold" />
						<span class="field-error mt-1 block text-xs text-terracotta"></span>
					</label>

					<label class="block">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Час</span>
						<input type="time" name="time" class="reservation-input w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream outline-none transition focus:border-gold" />
						<span class="field-error mt-1 block text-xs text-terracotta"></span>
					</label>

					<label class="block sm:col-span-2">
						<span class="mb-1.5 block text-sm font-medium text-cream/80">Съобщение (по желание)</span>
						<textarea name="message" rows="3" placeholder="Специални изисквания, повод за празнуване..." class="w-full rounded-xl border border-cream/15 bg-espresso-2 px-4 py-2.5 text-sm text-cream placeholder:text-cream/30 outline-none transition focus:border-gold"></textarea>
					</label>

					<button type="submit" class="sm:col-span-2 mt-2 rounded-full bg-terracotta px-7 py-3.5 text-sm font-semibold text-cream transition hover:bg-terracotta-dark">
						Изпрати заявка за резервация
					</button>
				</form>

				<div id="reservation-success" class="hidden flex-col items-center justify-center rounded-3xl bg-cream/5 p-10 text-center ring-1 ring-cream/10">
					<svg class="text-terracotta" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
					<h3 class="mt-4 font-display text-2xl font-medium text-cream">Заявката е изпратена!</h3>
					<p id="reservation-success-message" class="mt-2 max-w-sm text-sm text-cream/60"></p>
					<button id="reservation-reset" type="button" class="mt-6 rounded-full border border-cream/25 px-6 py-2.5 text-sm font-medium text-cream hover:bg-cream/10">
						Нова резервация
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
