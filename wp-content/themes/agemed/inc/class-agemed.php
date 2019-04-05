<?php
/**
 * Agemed Class
 *
 * @author Envolve
 * @since 1.0.0
 * @package agemed
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Agemed' ) ) :

	/**
	 * The main Agemed class
	 */
	class Agemed {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_filter( 'determine_current_user', array( $this, 'json_basic_auth_handler' ), 20 );
			remove_filter( 'admin_footer_text', 'fau_swap_footer_admin' );
			add_filter( 'admin_footer_text', '__return_empty_string', 11 );
			add_action( 'login_enqueue_scripts', array( $this, 'login_style' ), 11 );
			add_filter( 'login_headerurl', array( $this, 'custom_login_header_url' ) );
			add_filter( 'the_generator', '__return_empty_string' );
			add_action( 'admin_enqueue_scripts', array( $this, 'dashboard_scripts' ) );
			add_action( 'admin_head', array( $this, 'dashboard_favicon' ) );
		}

		public function json_basic_auth_handler( $user ) {
			global $wp_json_basic_auth_error;
			$wp_json_basic_auth_error = null;
			// Don't authenticate twice
			if ( ! empty( $user ) ) {
				return $user;
			}
			// Check that we're trying to authenticate
			if ( ! isset( $_SERVER['PHP_AUTH_USER'] ) ) {
				return $user;
			}
			$username = $_SERVER['PHP_AUTH_USER'];
			$password = $_SERVER['PHP_AUTH_PW'];
			/**
			 * In multi-site, wp_authenticate_spam_check filter is run on authentication. This filter calls
			 * get_currentuserinfo which in turn calls the determine_current_user filter. This leads to infinite
			 * recursion and a stack overflow unless the current function is removed from the determine_current_user
			 * filter during authentication.
			 */
			remove_filter( 'determine_current_user', 'json_basic_auth_handler', 20 );
			$user = wp_authenticate( $username, $password );
			add_filter( 'determine_current_user', 'json_basic_auth_handler', 20 );
			if ( is_wp_error( $user ) ) {
				$wp_json_basic_auth_error = $user;
				return null;
			}
			$wp_json_basic_auth_error = true;
			return $user->ID;
		}

		/**
		 * Adds agency customize login
		 */
		public function login_style() {
			global $agemed_version;

			wp_enqueue_style( 'agemed-login-style', get_stylesheet_directory_uri() . '/assets/css/login.css', '', $agemed_version );
		}

		public function custom_login_header_url( $url ) {
			return 'http://www.g9ideias.com';
		}

		public function dashboard_scripts() {
			global $agemed_version;

			$current_user = wp_get_current_user();

			if ( 'envolve' != $current_user->user_login ) {
				wp_enqueue_style( 'agemed-dashboard-style', get_template_directory_uri() . '/assets/css/dashboard.css', '', $agemed_version );
			}
		}


		public function dashboard_favicon() {
			echo '<link rel="icon" href="' . get_template_directory_uri() . '/assets/images/favicon.ico" type="image/x-icon">';
			echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.ico" type="image/x-icon">';
		}

	}
endif;

return new Agemed();
