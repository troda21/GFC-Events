<?php
/**
 * We are adding the Custom Post Types here to control the content.
 *
 * @package Grace Family Church v3.0
 */
 
if(!class_exists('Events_Post_Type'))
{
	/**
	 * A PostTypeTemplate class that provides 3 additional meta fields
	 */
	class Events_Post_Type
	{
		
    	/**
    	 * The Constructor
    	 */
    	public function __construct()
    	{
    		// register actions
    		add_action('init', array(&$this, 'init'));
    		add_action('admin_init', array(&$this, 'admin_init'));
    	} // END public function __construct()
	
    	/**
    	 * hook into WP's init action hook
    	 */
    	public function init()
    	{
    		// Initialize Post Type
			//add_action( 'init', 'event_post_type' );
    		//$this->venue_taxonomy();
    		//$this->ministry_taxonomy();
    		//$this->event_type_taxonomy();
    		//$this->event_post_type();
    		add_action( 'event_post_type', array(&$this, 'event_post_type') );
    	} // END public function init()

		// Register Events Custom Post Type
		public function event_post_type() {
		
			$labels4 = array(
				'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
				'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'           => __( 'Events', 'text_domain' ),
				'parent_item_colon'   => __( 'Parent Event:', 'text_domain' ),
				'all_items'           => __( 'All Events', 'text_domain' ),
				'view_item'           => __( 'View Event', 'text_domain' ),
				'add_new_item'        => __( 'Add New Event', 'text_domain' ),
				'add_new'             => __( 'Add New', 'text_domain' ),
				'edit_item'           => __( 'Edit Event', 'text_domain' ),
				'update_item'         => __( 'Update Event', 'text_domain' ),
				'search_items'        => __( 'Search Event', 'text_domain' ),
				'not_found'           => __( 'Not found', 'text_domain' ),
				'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
			);
			$args4 = array(
				'label'               => __( 'event_post_type', 'text_domain' ),
				'description'         => __( 'This is the event Post Type', 'text_domain' ),
				'labels'              => $labels4,
				'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
				'taxonomies'          => array( 'campus', 'ministry' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 20,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
			);
			register_post_type( 'events', $args4 );
		
		}
		
		// Hook into the 'init' action
		//add_action( 'init', 'event_post_type', 0 );


		// Register Campus Custom Taxonomy
		public function venue_taxonomy() {
		
			$labels1 = array(
				'name'                       => _x( 'Venues', 'Taxonomy General Name', 'text_domain' ),
				'singular_name'              => _x( 'Venue', 'Taxonomy Singular Name', 'text_domain' ),
				'menu_name'                  => __( 'Venue', 'text_domain' ),
				'all_items'                  => __( 'All Venues', 'text_domain' ),
				'parent_item'                => __( 'Parent Venue', 'text_domain' ),
				'parent_item_colon'          => __( 'Parent Venue:', 'text_domain' ),
				'new_item_name'              => __( 'New Venue Name', 'text_domain' ),
				'add_new_item'               => __( 'Add New Venue', 'text_domain' ),
				'edit_item'                  => __( 'Edit Venue', 'text_domain' ),
				'update_item'                => __( 'Update Venue', 'text_domain' ),
				'separate_items_with_commas' => __( 'Separate Venues with commas', 'text_domain' ),
				'search_items'               => __( 'Search Venues', 'text_domain' ),
				'add_or_remove_items'        => __( 'Add or remove Venues', 'text_domain' ),
				'choose_from_most_used'      => __( 'Choose from the most used Venues', 'text_domain' ),
				'not_found'                  => __( 'Not Found', 'text_domain' ),
			);
			$args1 = array(
				'labels'                     => $labels1,
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => false,
			);
			register_taxonomy( 'venue', array( 'events' ), $args1 );
		
		}
		
		// Hook into the 'init' action
		//add_action( 'init', array(&$this, 'venue_taxonomy');
		
		
		// Register Custom Taxonomy
		public function ministry_taxonomy() {
		
			$labels2 = array(
				'name'                       => _x( 'Ministries', 'Taxonomy General Name', 'text_domain' ),
				'singular_name'              => _x( 'Ministry', 'Taxonomy Singular Name', 'text_domain' ),
				'menu_name'                  => __( 'Ministry', 'text_domain' ),
				'all_items'                  => __( 'All Ministries', 'text_domain' ),
				'parent_item'                => __( 'Parent Ministry', 'text_domain' ),
				'parent_item_colon'          => __( 'Parent Ministry:', 'text_domain' ),
				'new_item_name'              => __( 'New Ministry Name', 'text_domain' ),
				'add_new_item'               => __( 'Add New Ministry', 'text_domain' ),
				'edit_item'                  => __( 'Edit Ministry', 'text_domain' ),
				'update_item'                => __( 'Update Ministry', 'text_domain' ),
				'separate_items_with_commas' => __( 'Separate Ministries with commas', 'text_domain' ),
				'search_items'               => __( 'Search Ministries', 'text_domain' ),
				'add_or_remove_items'        => __( 'Add or remove Ministries', 'text_domain' ),
				'choose_from_most_used'      => __( 'Choose from the most used Ministries', 'text_domain' ),
				'not_found'                  => __( 'Not Found', 'text_domain' ),
			);
			$args2 = array(
				'labels'                     => $labels2,
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => false,
			);
			register_taxonomy( 'ministry', array( 'events' ), $args2 );
		
		}
		
		// Hook into the 'init' action
		//add_action( 'init', 'ministry_taxonomy', 0 );
		
		
		// Register Custom Taxonomy
		public function event_type_taxonomy() {
		
			$labels3 = array(
				'name'                       => _x( 'Event Types', 'Taxonomy General Name', 'text_domain' ),
				'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'text_domain' ),
				'menu_name'                  => __( 'Event Type', 'text_domain' ),
				'all_items'                  => __( 'All Event Types', 'text_domain' ),
				'parent_item'                => __( 'Parent Event Type', 'text_domain' ),
				'parent_item_colon'          => __( 'Parent Event Type:', 'text_domain' ),
				'new_item_name'              => __( 'New Event Type Name', 'text_domain' ),
				'add_new_item'               => __( 'Add New Event Type', 'text_domain' ),
				'edit_item'                  => __( 'Edit Event Type', 'text_domain' ),
				'update_item'                => __( 'Update Event Type', 'text_domain' ),
				'separate_items_with_commas' => __( 'Separate Event Types with commas', 'text_domain' ),
				'search_items'               => __( 'Search Event Types', 'text_domain' ),
				'add_or_remove_items'        => __( 'Add or remove Event Types', 'text_domain' ),
				'choose_from_most_used'      => __( 'Choose from the most used Event Types', 'text_domain' ),
				'not_found'                  => __( 'Not Found', 'text_domain' ),
			);
			$args3 = array(
				'labels'                     => $labels3,
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => true,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => false,
			);
			register_taxonomy( 'event-type', array( 'events' ), $args3 );
		
		}
		
		// Hook into the 'init' action
		//add_action( 'init', 'event_type_taxonomy', 0 );
		
		
		
	} // END class Events_Post_Type
} // END if(!class_exists('Events_Post_Type'))
