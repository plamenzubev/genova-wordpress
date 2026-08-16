<?php
/**
 * Osteria Nova theme bootstrap.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OSTERIA_NOVA_VERSION', '1.0.0' );

require get_template_directory() . '/inc/content.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/reservation-ajax.php';
