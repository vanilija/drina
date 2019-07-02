<?php
/* Sending mail in photo proofing feature */

/** change content type for desired e-mail
 * @since 1.0.8
 */
function a13fe_album_mail_content_type() {
	return 'text/html';
}



/**
 * @param $to
 * @param $subject
 * @param $message
 *
 * @since 1.0.8
 */
function a13fe_album_send_admin_mail($to, $subject, $message) {
	add_filter( 'wp_mail_content_type', 'a13fe_album_mail_content_type' );
	wp_mail( $to, $subject, $message );
	remove_filter( 'wp_mail_content_type', 'a13fe_album_mail_content_type' );
}




/** function to send mail about new proofed album
 * @since 1.0.8
 *
 * @param $album_id
 */
function a13fe_album_proofing_admin_mail($album_id) {
	global $apollo13framework_a13;

	//no e-mail if disabled
	if( $apollo13framework_a13->get_option('proofing_send_email' ) === 'off' ){
		return;
	}

	$album_title = get_the_title($album_id);
	$album_link = get_permalink($album_id);

	$to = $apollo13framework_a13->get_option( 'proofing_email' );
	if( empty( $to ) || ! is_email( $to ) ){
		$to = get_option('admin_email');
	}
	/* translators: %s: Album name */
	$subject = sprintf( __('The album %s is marked as completed in the photo proofing process', 'apollo13-framework-extensions'), $album_title );
	/** @noinspection HtmlUnknownTarget */
	$message = sprintf( __('Your client has marked the <a href="%1$s">%2$s</a> album as completed in the photo proofing process. Visit it to see what has been selected.', 'apollo13-framework-extensions'), esc_url($album_link), esc_html($album_title) );

	//try to send e-mail
	a13fe_album_send_admin_mail( $to, $subject, $message );
}