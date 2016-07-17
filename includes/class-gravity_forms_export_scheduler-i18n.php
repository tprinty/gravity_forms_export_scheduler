<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/tprinty/gravity_forms_export_scheduler
 * @since      0.0.1
 *
 * @package    Gravity Forms Export Scheduler
 * @subpackage gravity_forms_export_scheduler/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.0.1
 * @package    Gravity Forms Export Scheduler
 * @subpackage gravity_forms_export_scheduler/includes
 * @author     Tom Printy <tprinty@edisonave.com>
 */
class gravity_forms_export_scheduler_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
