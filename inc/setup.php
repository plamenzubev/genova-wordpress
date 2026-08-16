<?php
/**
 * Theme setup: supports, assets, nav menus.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function osteria_nova_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => __( 'Основно меню', 'osteria-nova' ),
		)
	);
}
add_action( 'after_setup_theme', 'osteria_nova_setup' );

function osteria_nova_assets(): void {
	wp_enqueue_style(
		'osteria-nova-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,500&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'osteria-nova-style',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'osteria-nova-main',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'osteria-nova-main',
		'osteriaNova',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'osteria_nova_reservation' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'osteria_nova_assets' );

/**
 * The default style.css is only theme metadata here — Tailwind's reset
 * already covers base styles, so we dequeue core/theme block-editor CSS
 * that isn't relevant to this classic, non-block theme.
 */
function osteria_nova_dequeue_block_styles(): void {
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'osteria_nova_dequeue_block_styles', 20 );

/**
 * Google Analytics 4 — replace OSTERIA_NOVA_GA_ID with a real Measurement ID
 * before going live. Left in place so `reservation_submit` events (fired in
 * assets/js/main.js on a successful booking) have somewhere to report to.
 */
function osteria_nova_analytics(): void {
	$ga_id = 'G-XXXXXXXXXX';
	?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( $ga_id ); ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push( arguments ); }
		gtag( 'js', new Date() );
		gtag( 'config', '<?php echo esc_js( $ga_id ); ?>' );
	</script>
	<?php
}
add_action( 'wp_head', 'osteria_nova_analytics', 1 );
