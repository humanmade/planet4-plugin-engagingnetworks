<?php

namespace P4EN\Controllers;

if ( ! class_exists( 'Uninstall_Controller' ) ) {
	/**
	 * Planet4 - EngagingNetworks uninstaller
	 *
	 * Used when clicking "Delete" from inside of WordPress's plugins page.
	 */
	class Uninstall_Controller {

		/**
		 * Initialize uninstaller
		 */
		public function __construct() {

			// Exit if accessed directly.
			if ( ! defined( 'ABSPATH' ) ) {
				$this->exit_uninstaller();
			}
			// Not uninstalling.
			if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
				$this->exit_uninstaller();
			}
			// Not uninstalling.
			if ( ! WP_UNINSTALL_PLUGIN ) {
				$this->exit_uninstaller();
			}
			// Clean any options that were created by Planet4 - EngagingNetworks plugin.
			self::clean_options();
		}

		/**
		 * Cleanup options
		 *
		 * Deletes Planet4 - EngagingNetworks options and transients.
		 *
		 * @return void
		 */
		protected static function clean_options() {
			// Delete options.
			delete_option( 'p4en_main_settings' );
			delete_option( 'p4en_pages_datatable_settings' );
		}

		/**
		 * Exit uninstaller
		 *
		 * Gracefully exit the uninstaller if we should not be here
		 *
		 * @return void
		 */
		protected function exit_uninstaller() {
			status_header( 404 );
			exit;

		}
	}
}
