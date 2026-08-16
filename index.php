<?php
/**
 * Fallback template. This theme is built as a single-page site —
 * front-page.php handles the homepage; this only renders if WordPress
 * can't resolve a more specific template.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="mx-auto max-w-3xl px-6 py-32 text-center">
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class( 'mb-16' ); ?>>
				<h1 class="font-display text-3xl font-medium text-espresso"><?php the_title(); ?></h1>
				<div class="mt-6 text-left text-espresso/80"><?php the_content(); ?></div>
			</article>
			<?php
		endwhile;
		?>
	<?php else : ?>
		<h1 class="font-display text-3xl font-medium text-espresso">Нищо не е намерено</h1>
	<?php endif; ?>
</main>

<?php
get_footer();
