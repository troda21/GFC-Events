<?php
/**
 * Plugin Name: GFC Events Manager
 * Plugin URI: http://GFConline.com
 * Description: This PLugin is for managing the events for Grace Family Church.
 * Version: 0.1
 * Author: Tim Roda @ GFC
 * Author URI: http://GFConline.com
 * Text Domain: gfcevents
 * Network: false
 * License: GPL2
 */
 
 /*  Copyright 2015   Grace Family Church   (email : troda@gfconline.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'GFCEVENTS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'GFCEVENTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


if(!class_exists('GFC_events'))
{
	class GFC_events
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Register custom post types
			require_once( GFCEVENTS_PLUGIN_PATH . 'inc/post-types.php' );
			//require_once(sprintf("%s/includes/post-types.php", dirname(__FILE__)));
			//$Post_Type_Template = new Post_Type_Template();
		} // END public function __construct


		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate


		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('GFC_events'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('GFC_events', 'activate'));
	register_deactivation_hook(__FILE__, array('GFC_events', 'deactivate'));

	// instantiate the plugin class
	$wp_plugin_template = new GFC_events();

}
