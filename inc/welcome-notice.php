<?php

/**
 * Welcome Notice
 *
 * @package nivaro
 * @author Yahya Qara
 * @since 1.0.0
 */
function nvro_welcome_notice() {
	$current_screen = get_current_screen();

	// Check if the current screen is the themes page.
	if ( 'themes' === $current_screen->id ) {
		// Enqueue styles.
		wp_enqueue_style( 'nvro-welcome-notice', get_template_directory_uri() . '/assets/css/welcome-notice.css', array(), wp_get_theme()->get( 'Version' ) );

		// Enqueue jQuery.
		wp_enqueue_script( 'jquery' );

		// Register and enqueue welcome-notice.js.
		wp_register_script( 'nvro-welcome-notice-js', get_template_directory_uri() . '/assets/js/welcome-notice.js', array( 'jquery' ), '1.0.0', true );
		$welcome_notice_params = array(
			'ajaxurl'                 => admin_url( 'admin-ajax.php' ),
			'welcome_notice_security' => wp_create_nonce( 'nvro-welcome-notice-nonce' ),
		);
		wp_localize_script( 'nvro-welcome-notice-js', 'nvro_welcome_notice_params', $welcome_notice_params );
		wp_enqueue_script( 'nvro-welcome-notice-js' );

		$get_started_url = 'https://blocklayouts.com/';
		// Check if the notice has been dismissed.
		if ( ! get_option( 'nvro_notice_dismissed', false ) ) {
			?>
<div class="nivaro-notice-container notice notice-info is-dismissible">
    <div class="nivaro-notice-content">
        <div class="col-left">
            <p class="nivaro-notice-subtitle">
                <?php esc_html_e( 'Thanks for installing Nivaro ✨', 'nivaro' ); ?>
            </p>
            <h2 class="nivaro-notice-heading">
                <?php
				printf(
					__( 'Copy & Paste %s WordPress Patterns Library!', 'nivaro' ),
					'<span>Pre-Designed</span>'
				);

				?>
            </h2>
            <p class="nivaro-notice-description">
                <?php esc_html_e( 'Introducing Blocklayouts, a library of pre-designed WordPress patterns for any block theme – no plugins needed!', 'nivaro' ); ?>
            </p>
            <a href="<?php echo esc_url( $get_started_url ); ?>" class="nivaro-notice-btn" target="_blank">
                <?php esc_html_e( 'Explore Now', 'nivaro' ); ?>
            </a>
        </div>
        <div class="col-right">
            <img class="nivaro-notice-img"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/welcome-notice-img.png' ); ?>"
                alt="Blocks Image">
        </div>
    </div>
</div>
<?php
		}
	}
}
add_action( 'admin_notices', 'nvro_welcome_notice' );

function nvro_dismiss_notice() {
	// Check nonce for security.
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'nvro-welcome-notice-nonce' ) ) {
		die( 'Permission check failed' );
	}

	// Update the option to indicate that the notice has been dismissed.
	update_option( 'nvro_notice_dismissed', true );
	die();
}

add_action( 'wp_ajax_nvro_dismiss_notice', 'nvro_dismiss_notice' );

/**
 * Nivaro theme activate
 *
 * @return void
 */
function nvro_activate() {
	// Check if it's the first activation.
	if ( get_option( 'nvro_activated', false ) ) {
		add_action( 'admin_notices', 'nvro_welcome_notice' );
		// Update the option to indicate that the welcome notice has been shown.
		update_option( 'nvro_activated', true );
	}
}
add_action( 'after_switch_theme', 'nvro_activate' );