<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/tprinty/gravity_forms_export_scheduler
 * @since      0.0.1
 *
 * @package    Gravity Forms Export Scheduler
 * @subpackage gravity_forms_export_scheduler/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      0.0.1
 * @package    Gravity Forms Export Scheduler
 * @subpackage gravity_forms_export_scheduler/includes
 * @author     Tom Printy<tprinty@edisonave.com>
 */
class gravity_forms_export_scheduler_Activator {

	/**
	 * Checks for and creates tables needed for the plugin to work. 
	 *
	 * This fires in on install and will check for and then create the table if 
	 * the table does not exist.
	 *
	 * @since    0.0.1
	 */
	public static function activate() {
		global $wpdb;
		
		$table_name = $wpdb->prefix . 'gf_export_sched';
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			gf_form_id mediumint(9) NOT NULL,
			options text DEFAULT '' NOT NULL,
			filters text DEFAULT '' NOT NULL,
			runtime TIME DEFAULT '00:00:00' NOT NULL,
			active tinyint DEFAULT 0 NOT NULL,
			UNIQUE KEY id (id)
		) $charset_collate;";

			
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

	}

}
