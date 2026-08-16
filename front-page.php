<?php
/**
 * The one-page landing template — hero through footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main>
	<?php
	get_template_part( 'template-parts/hero' );
	get_template_part( 'template-parts/about' );
	get_template_part( 'template-parts/menu' );
	get_template_part( 'template-parts/gallery' );
	get_template_part( 'template-parts/testimonials' );
	get_template_part( 'template-parts/reservation' );
	?>
</main>

<?php
get_footer();
