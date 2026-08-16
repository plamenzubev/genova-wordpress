<?php
/**
 * Handles the reservation form submission via admin-ajax.php.
 * Validates on the server (in addition to the client-side JS checks)
 * and emails the request to the site admin with wp_mail().
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function osteria_nova_handle_reservation(): void {
	check_ajax_referer( 'osteria_nova_reservation', 'nonce' );

	$name  = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$date  = isset( $_POST['date'] ) ? sanitize_text_field( wp_unslash( $_POST['date'] ) ) : '';
	$time  = isset( $_POST['time'] ) ? sanitize_text_field( wp_unslash( $_POST['time'] ) ) : '';
	$guests  = isset( $_POST['guests'] ) ? absint( $_POST['guests'] ) : 0;
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	$errors = array();

	if ( '' === trim( $name ) ) {
		$errors['name'] = 'Моля, въведете име';
	}
	if ( ! is_email( $email ) ) {
		$errors['email'] = 'Невалиден имейл адрес';
	}
	if ( ! preg_match( '/^[+\d][\d\s]{6,}$/', $phone ) ) {
		$errors['phone'] = 'Невалиден телефонен номер';
	}
	if ( '' === $date ) {
		$errors['date'] = 'Изберете дата';
	}
	if ( '' === $time ) {
		$errors['time'] = 'Изберете час';
	}

	if ( ! empty( $errors ) ) {
		wp_send_json_error( array( 'errors' => $errors ), 422 );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( 'New reservation from %s', $name );
	$body    = implode(
		"\n",
		array(
			"Name: {$name}",
			"Email: {$email}",
			"Phone: {$phone}",
			"Date: {$date}",
			"Time: {$time}",
			"Guests: {$guests}",
			"Message: {$message}",
		)
	);

	wp_mail( $to, $subject, $body, array( "Reply-To: {$name} <{$email}>" ) );

	wp_send_json_success(
		array(
			'message' => 'Заявката е изпратена!',
			'name'    => $name,
			'email'   => $email,
		)
	);
}
add_action( 'wp_ajax_osteria_nova_reservation', 'osteria_nova_handle_reservation' );
add_action( 'wp_ajax_nopriv_osteria_nova_reservation', 'osteria_nova_handle_reservation' );
