<?php
/*
Plugin Name: Custom Share Buttons
Description: A custom custom plugin that enables you to add Custom Share Buttons to all of your posts and/or pages.
Version: 1.0
Author: Raghunath Gurjar
Author URI: http://www.raghunathgurjar.wordpress.com/
License: GPLv2

Copyright 2014 Custom Share Buttons raghunath.0087@gmail.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

	// --------- INSTALLATION ------------ //

	// run the activation function upon acitvation of the plugin
	register_activation_hook( __FILE__,'csbtns_activate');
	
	// register deactivation hook
	register_uninstall_hook(__FILE__,'csbtns_uninstall');
	
	// activate csbtns function
	function csbtns_activate() {
	
		// insert default options for csbtns
		add_option('csbtns_version', 				'3.9');
		add_option('csbtns_image_set', 			'somacro');
		add_option('csbtns_size', 				'35');
		add_option('csbtns_pages',				'');
		add_option('csbtns_posts',				'');
		add_option('csbtns_cats_archs',			'');
		add_option('csbtns_homepage',				'');
		add_option('csbtns_align', 				'left');
		add_option('csbtns_padding', 				'6');
		add_option('csbtns_before_or_after', 		'after');
		add_option('csbtns_custom_styles', 		'');
		add_option('csbtns_email_message', 		'');
		add_option('csbtns_twitter_text', 		'');
		add_option('csbtns_buffer_text', 			'');
		add_option('csbtns_flattr_user_id', 		'');
		add_option('csbtns_flattr_url', 			'');
		add_option('csbtns_share_new_window', 	'Y');
		add_option('csbtns_link_to_ssb', 			'Y');
		add_option('csbtns_show_share_count',		'');
		add_option('csbtns_share_count_style',	'default');
		add_option('csbtns_share_count_css',		'');
		add_option('csbtns_share_count_once',		'Y');
		add_option('csbtns_widget_text',			'Y');
		add_option('csbtns_rel_nofollow',			'');
		
		// share container
		add_option('csbtns_div_padding', 			'');
		add_option('csbtns_div_rounded_corners', 	'');
		add_option('csbtns_border_width', 		'');
		add_option('csbtns_div_border', 			'#59625c');
		add_option('csbtns_div_background', 		'');
		
		// share text
		add_option('csbtns_share_text', 			"Share This!");
		add_option('csbtns_text_placement', 		'left');
		add_option('csbtns_font_family', 			'Indie Flower');
		add_option('csbtns_font_color',			'');	
		add_option('csbtns_font_size',			'20');
		add_option('csbtns_font_weight',			'');
		
		// include
		add_option('csbtns_selected_buttons', 	'');
		
		// custom images
		add_option('csbtns_custom_email', 		'');
		add_option('csbtns_custom_google', 		'');
		add_option('csbtns_custom_facebook', 		'');
		add_option('csbtns_custom_twitter', 		'');
		add_option('csbtns_custom_diggit', 		'');
		add_option('csbtns_custom_linkedin', 	  	'');
		add_option('csbtns_custom_reddit', 	  	'');
		add_option('csbtns_custom_stumbleupon', 	'');
		add_option('csbtns_custom_pinterest', 	'');
		add_option('csbtns_custom_buffer', 		'');
		add_option('csbtns_custom_flattr', 		'');
		add_option('csbtns_custom_tumblr', 		'');
		add_option('csbtns_custom_print', 		'');
	}
	
	// uninstall csbtns
	function csbtns_uninstall() {

		//if uninstall not called from WordPress exit
		if (defined('WP_UNINSTALL_PLUGIN')) {
			exit();
		}

		// delete all options
		delete_option('csbtns_version');
		delete_option('csbtns_image_set');
		delete_option('csbtns_size');
		delete_option('csbtns_pages');
		delete_option('csbtns_posts');
		delete_option('csbtns_cats_archs');
		delete_option('csbtns_homepage');
		delete_option('csbtns_align');
		delete_option('csbtns_padding');
		delete_option('csbtns_before_or_after');
		delete_option('csbtns_custom_styles');
		delete_option('csbtns_email_message');
		delete_option('csbtns_buffer_text');
		delete_option('csbtns_twitter_text');
		delete_option('csbtns_flattr_user_id');
		delete_option('csbtns_flattr_url');
		delete_option('csbtns_share_new_window');
		delete_option('csbtns_link_to_ssb');
		delete_option('csbtns_show_share_count');
		delete_option('csbtns_share_count_style');
		delete_option('csbtns_share_count_css');
		delete_option('csbtns_share_count_once');
		delete_option('csbtns_widget_text');
		delete_option('csbtns_rel_nofollow');
		
		// share container
		delete_option('csbtns_div_padding');
		delete_option('csbtns_div_rounded_corners');
		delete_option('csbtns_border_width');
		delete_option('csbtns_div_border');
		delete_option('csbtns_div_background');

		// share text
		delete_option('csbtns_share_text');
		delete_option('csbtns_text_placement');
		delete_option('csbtns_font_family');
		delete_option('csbtns_font_color');	
		delete_option('csbtns_font_size');
		delete_option('csbtns_font_weight');

		// include
		delete_option('csbtns_selected_buttons');

		// custom images
		delete_option('csbtns_custom_email');
		delete_option('csbtns_custom_google');
		delete_option('csbtns_custom_facebook');
		delete_option('csbtns_custom_twitter');
		delete_option('csbtns_custom_diggit');
		delete_option('csbtns_custom_linkedin');
		delete_option('csbtns_custom_reddit');
		delete_option('csbtns_custom_stumbleupon');
		delete_option('csbtns_custom_pinterest');
		delete_option('csbtns_custom_buffer');
		delete_option('csbtns_custom_flattr');
		delete_option('csbtns_custom_tumblr');
		delete_option('csbtns_custom_print');
	}

	// --------- ADMIN BITS ------------ //
	
	// add settings link on plugin page
	function csbtns_settings_link($links) { 
	
		// add to plugins links
		array_unshift($links, '<a href="options-general.php?page=custom-share-buttons">Settings</a>'); 
		
		// return all links
		return $links; 
	}

	// add filter hook for plugin action links
	add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'csbtns_settings_link' );
	
	// add menu to dashboard
	add_action( 'admin_menu', 'csbtns_menu' );
	
	// widget class
	class csbtns_widget extends WP_Widget {

		// construct the widget
		public function __construct() {
			parent::__construct(
	 		'csbtns_widget', // Base ID
			'Custom Share Buttons', // Name
			array( 'description' => __( 'Custom Share Buttons', 'text_domain' ), ) // Args
		);
		}

		// extract required arguments and run the shortcode
		public function widget( $args, $instance ) {
			extract( $args );
			$title = apply_filters( 'widget_title', $instance['title'] );
			$url = $instance['url'];
			$pagetitle = $instance['pagetitle'];

			echo $before_widget;
			if (!empty($title))
			echo $before_title . $title . $after_title;
			
			$shortcode = '[csbtns';
				($url != '' ? $shortcode .= ' url="' . $url . '"' : NULL);
				($pagetitle != '' ? $shortcode .= ' title="' . $pagetitle . '"' : NULL);
			$shortcode .= ' widget="Y"]';
			echo do_shortcode($shortcode, 'text_domain' );
			echo $after_widget;
		}

		public function form( $instance ) {
			
			if ( isset( $instance[ 'title' ] ) ) {
			
				$title = $instance[ 'title' ];
			} else {
			
			$title = __( 'Custom Share Buttons', 'text_domain' );
			}

			$url = esc_url( $instance['url'] );
			$pagetitle = esc_attr( $instance['pagetitle'] );
		
			# Title
			echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
			# URL
			echo '<p><label for="' . $this->get_field_id('url') . '">' . 'URL:' . '</label><input class="widefat" id="' . $this->get_field_id('url') . '" name="' . $this->get_field_name('url') . '" type="text" value="' . $url . '" /></p>';
			echo '<p class="description">Leave this blank to share the current page, or enter a URL to force one URL for all pages.</p>';
			# Page title
			echo '<p><label for="' . $this->get_field_id('pagetitle') . '">' . 'Page title:' . '</label><input class="widefat" id="' . $this->get_field_id('pagetitle') . '" name="' . $this->get_field_name('pagetitle') . '" type="text" value="' . $pagetitle . '" /></p>';
			echo '<p class="description">Set a page title for the page being shared, leave this blank if you have not set a URL.</p>';
		}

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['url'] = strip_tags( $new_instance['url'] );
			$instance['pagetitle'] = strip_tags( $new_instance['pagetitle'] );

			return $instance;
		}

	}
	
	// add csbtns to available widgets
	add_action( 'widgets_init', create_function( '', 'register_widget( "csbtns_widget" );' ) );
	
	
	function mywidget_init() {
		
		register_sidebar_widget('Custom Share Buttons Widget', 'csbtns_widget');
		register_widget_control('Custom Share Buttons Widget', 'csbtns_widget_control');
	}
	
	// include js files and upload script
	function csbtns_admin_scripts() {
	
		// all extra scripts needed
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_enqueue_script('wp-color-picker');
		wp_register_script('my-upload', plugins_url('/js/csbtns_admin.js', __FILE__ ));
		wp_enqueue_script('my-upload');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('jquery-ui');
	}
	
	// include styles for the csbtns admin panel
	function csbtns_admin_styles() {
	
		// admin styles
		wp_enqueue_style('thickbox');
		wp_enqueue_style('wp-color-picker');
		wp_register_style('csbtns-styles', plugins_url('/css/style.css', __FILE__ ));
		wp_enqueue_style('csbtns-styles');
	}
	
	// check if viewing the admin page
	if (isset($_GET['page']) && $_GET['page'] == 'custom-share-buttons') {
	
		// add the registered scripts
		add_action('admin_print_styles', 'csbtns_admin_styles');
		add_action('admin_print_scripts', 'csbtns_admin_scripts');
	}
	
	// add css scripts for page/post use
	function csbtns_page_scripts() {
	
		// get settings
		$arrSettings = get_csbtns_settings();
		
		// only include CSS if needed
		//if (is_page() && $arrSettings['csbtns_pages'] == 'Y' || is_single() && $arrSettings['csbtns_posts'] == 'Y' || is_category() && $arrSettings['csbtns_cats_archs'] == 'Y' || is_archive() && $arrSettings['csbtns_cats_archs'] == 'Y' || is_home() && $arrSettings['csbtns_homepage'] == 'Y' || $booShortCode == TRUE) { 
		
			// if reenie beenie font is selected
			if ($arrSettings['csbtns_font_family'] == 'Indie Flower') {
		
				// font scripts 
				wp_register_style('csbtnsFont', 'http://fonts.googleapis.com/css?family=Indie+Flower');
				wp_enqueue_style( 'csbtnsFont');
			} else if ($arrSettings['csbtns_font_family'] == 'Reenie Beanie') {
				
				// font scripts 
				wp_register_style('csbtnsFont', 'http://fonts.googleapis.com/css?family=Reenie+Beanie');
				wp_enqueue_style( 'csbtnsFont');
			}		
		//}
		
	}
	
	// call scripts add function
	add_action( 'wp_enqueue_scripts', 'csbtns_page_scripts' );
	
	// menu settings
	function csbtns_menu() {
	
		// add menu page
		add_options_page( 'Custom Share Buttons', 'Custom Share Buttons', 'manage_options', 'custom-share-buttons', 'csbtns_settings');
		
		// query the db for current csbtns settings
		$arrSettings = get_csbtns_settings();

		// check if not yet updated to 3.9
		if ($arrSettings['csbtns_version'] != '3.9') {
		
			// include then run the upgrade script
			include_once (plugin_dir_path(__FILE__) . '/inc/csbtns_upgrade.php');
			upgrade_csbtns($arrSettings);		
		}
		
		// check if any buttons have been selected
		if ($arrSettings['csbtns_selected_buttons'] == '' && $_GET['page'] != 'custom-share-buttons') {
		
			// output a warning that buttons need configuring and provide a link to settings
			echo '<div id="csbtns-warning" class="updated fade"><p>Your <strong>Custom Share Buttons</strong> need <a href="options-general.php?page=custom-share-buttons"><strong>configuration</strong></a> before they will appear. </p></div>';
		}
	}

	// --------- SETTINGS PAGE ------------ //

	// answer form
	function csbtns_settings() {
	
		//' check if user has the rights to manage options
		if ( !current_user_can( 'manage_options' ) )  {
		
			// permissions message
			wp_die( __('You do not have sufficient permissions to access this page.'));
		}
		
		// variables
		$htmlSettingsSaved = '';
		
		// check for submitted form
		if (isset($_POST['csbtns_options'])) {
		
			// update existing csbtns settings		
			update_option('csbtns_image_set', 			$_POST['csbtns_image_set']);
			update_option('csbtns_size', 					$_POST['csbtns_size']);
			update_option('csbtns_pages', 				(isset($_POST['csbtns_pages']) ? $_POST['csbtns_pages'] : NULL));
			update_option('csbtns_posts', 				(isset($_POST['csbtns_posts']) ? $_POST['csbtns_posts'] : NULL));
			update_option('csbtns_cats_archs', 			(isset($_POST['csbtns_cats_archs']) ? $_POST['csbtns_cats_archs'] : NULL));
			update_option('csbtns_homepage', 				(isset($_POST['csbtns_homepage']) ? $_POST['csbtns_homepage'] : NULL));
			update_option('csbtns_align', 				(isset($_POST['csbtns_homepage']) ? $_POST['csbtns_homepage'] : NULL));
			update_option('csbtns_padding', 				$_POST['csbtns_padding']);								
			update_option('csbtns_before_or_after', 		$_POST['csbtns_before_or_after']);
			update_option('csbtns_custom_styles', 		$_POST['csbtns_custom_styles']);
			update_option('csbtns_email_message', 		stripslashes_deep($_POST['csbtns_email_message']));
			update_option('csbtns_twitter_text', 			stripslashes_deep($_POST['csbtns_twitter_text']));
			update_option('csbtns_buffer_text', 			stripslashes_deep($_POST['csbtns_buffer_text']));
			update_option('csbtns_flattr_user_id', 		stripslashes_deep($_POST['csbtns_flattr_user_id']));
			update_option('csbtns_flattr_url', 			stripslashes_deep($_POST['csbtns_flattr_url']));
			update_option('csbtns_share_new_window', 		(isset($_POST['csbtns_share_new_window']) ? $_POST['csbtns_share_new_window'] : NULL));
			update_option('csbtns_link_to_ssb', 			(isset($_POST['csbtns_link_to_ssb']) ? $_POST['csbtns_link_to_ssb'] : NULL));
			update_option('csbtns_show_share_count', 		(isset($_POST['csbtns_show_share_count']) ? $_POST['csbtns_show_share_count'] : NULL));
			update_option('csbtns_share_count_style',		$_POST['csbtns_share_count_style']);
			update_option('csbtns_share_count_css',		$_POST['csbtns_share_count_css']);
			update_option('csbtns_share_count_once',		(isset($_POST['csbtns_share_count_once']) ? $_POST['csbtns_share_count_once'] : NULL));
			update_option('csbtns_widget_text',			$_POST['csbtns_widget_text']);
			update_option('csbtns_rel_nofollow',			(isset($_POST['csbtns_rel_nofollow']) ? $_POST['csbtns_rel_nofollow'] : NULL));
			
			// share container
			update_option('csbtns_div_padding', 			$_POST['csbtns_div_padding']);
			update_option('csbtns_div_rounded_corners', 	(isset($_POST['csbtns_div_rounded_corners']) ? $_POST['csbtns_div_rounded_corners'] : NULL));
			update_option('csbtns_border_width', 			$_POST['csbtns_border_width']);
			update_option('csbtns_div_border', 			$_POST['csbtns_div_border']);
			update_option('csbtns_div_background', 		$_POST['csbtns_div_background']);

			// text
			update_option('csbtns_share_text', 			stripslashes_deep($_POST['csbtns_share_text']));	
			update_option('csbtns_text_placement', 		$_POST['csbtns_text_placement']);	
			update_option('csbtns_font_family', 			$_POST['csbtns_font_family']);	
			update_option('csbtns_font_color', 			$_POST['csbtns_font_color']);	
			update_option('csbtns_font_size', 			$_POST['csbtns_font_size']);	
			update_option('csbtns_font_weight', 			$_POST['csbtns_font_weight']);	

			// include
			update_option('csbtns_selected_buttons', 		$_POST['csbtns_selected_buttons']);
			
			// custom images
			update_option('csbtns_custom_email', 			$_POST['csbtns_custom_email']);
			update_option('csbtns_custom_google', 		$_POST['csbtns_custom_google']);
			update_option('csbtns_custom_facebook', 		$_POST['csbtns_custom_facebook']);
			update_option('csbtns_custom_twitter', 		$_POST['csbtns_custom_twitter']);
			update_option('csbtns_custom_diggit', 		$_POST['csbtns_custom_diggit']);
			update_option('csbtns_custom_linkedin', 		$_POST['csbtns_custom_linkedin']);
			update_option('csbtns_custom_reddit', 		$_POST['csbtns_custom_reddit']);
			update_option('csbtns_custom_stumbleupon', 	$_POST['csbtns_custom_stumbleupon']);
			update_option('csbtns_custom_pinterest', 		$_POST['csbtns_custom_pinterest']);
			update_option('csbtns_custom_buffer', 		$_POST['csbtns_custom_buffer']);
			update_option('csbtns_custom_flattr', 		$_POST['csbtns_custom_flattr']);
			update_option('csbtns_custom_tumblr', 		$_POST['csbtns_custom_tumblr']);
			update_option('csbtns_custom_print', 			$_POST['csbtns_custom_print']);

			// show settings saved message
			$htmlSettingsSaved = '<div id="setting-error-settings_updated" class="updated settings-error"><p><strong>Your settings have been saved. <a href="' . site_url() . '">Visit your site</a> to see how your buttons look!</strong></p></div>';
		}
		
		// include then run the upgrade script
		include_once (plugin_dir_path(__FILE__) . '/inc/csbtns_admin_panel.php');

		// query the db for current csbtns settings
		$arrSettings = get_csbtns_settings();

		// --------- ADMIN PANEL ------------ //
		csbtns_admin_panel($arrSettings, $htmlSettingsSaved);
	}
	
	// add CSS to the head
	add_action( 'wp_head', 'get_csbtns_style' );
	
	// generate style
	function get_csbtns_style() {
	
		// query the db for current csbtns settings
		$arrSettings = get_csbtns_settings();
	
		// only include CSS if needed
		//if () { 
	
			// css style
			$htmlcsbtnsStyle = '<style type="text/css">';
			
			// check if custom styles haven't been set
			if ($arrSettings['csbtns_custom_styles'] == '') {
			
				// use set options
				$htmlcsbtnsStyle .= '	.csbtns {
											' . ($arrSettings['csbtns_div_padding'] 			!= ''	? 'padding: ' 	. $arrSettings['csbtns_div_padding'] . 'px;' : NULL) . '
											' . ($arrSettings['csbtns_border_width'] 			!= ''	? 'border: ' . $arrSettings['csbtns_border_width'] . 'px solid ' 	. $arrSettings['csbtns_div_border'] . ';' : NULL) . '
											' . ($arrSettings['csbtns_div_background'] 		!= ''	? 'background-color: ' 	. $arrSettings['csbtns_div_background'] . ';' : NULL) . '
											' . ($arrSettings['csbtns_div_rounded_corners'] 	== 'Y'	? '-moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml-border-radius: 10px;  border-radius: 10px; -o-border-radius: 10px;' : NULL) . '
										}
										.csbtns img		
										{ 	
											width: ' . $arrSettings['csbtns_size'] . 'px !important;
											padding: ' . $arrSettings['csbtns_padding'] . 'px;
											border:  0;
											box-shadow: none !important;
											display: inline;
											vertical-align: middle;
										}
										.csbtns, .csbtns a		
										{
											text-decoration:none;
											' . ($arrSettings['csbtns_div_background'] == ''	? 'background: none;' : NULL) . '
											' . ($arrSettings['csbtns_font_family'] 	!= ''	? 'font-family: ' . $arrSettings['csbtns_font_family'] . ';' : NULL) . '
											' . ($arrSettings['csbtns_font_size']		!= ''	? 'font-size: 	' . $arrSettings['csbtns_font_size'] . 'px;' : NULL) . '
											' . ($arrSettings['csbtns_font_color'] 	!= ''	? 'color: 		' . $arrSettings['csbtns_font_color'] . '!important;' : NULL) . '
											' . ($arrSettings['csbtns_font_weight'] 	!= ''	? 'font-weight: ' . $arrSettings['csbtns_font_weight'] . ';' : NULL) . '
										}';
			}
			
			// else use set options
			else {
	
				// use custom styles
				$htmlcsbtnsStyle .= $arrSettings['csbtns_custom_styles'];
				
			}
			
			// if counters option is set to Y
			if ($arrSettings['csbtns_show_share_count'] == 'Y') {
			
				// if no custom share count css is set
				if ($arrSettings['csbtns_share_count_css'] == '') {
				
					// styles that apply to all counter css sets
					$htmlcsbtnsStyle .= '.csbtns_sharecount:after, .csbtns_sharecount:before {
											right: 100%;
											border: solid transparent;
											content: " ";
											height: 0;
											width: 0;
											position: absolute;
											pointer-events: none;
										}
										.csbtns_sharecount:after {
											border-color: rgba(224, 221, 221, 0);
											border-right-color: #f5f5f5;
											border-width: 5px;
											top: 50%;
											margin-top: -5px;
										}
										.csbtns_sharecount:before {
											border-color: rgba(85, 94, 88, 0);
											border-right-color: #e0dddd;
											border-width: 6px;
											top: 50%;
											margin-top: -6px;
										}
										.csbtns_sharecount {
											font: 11px Arial, Helvetica, sans-serif;
											
											padding: 5px;
											-khtml-border-radius: 6px;
											-o-border-radius: 6px;
											-webkit-border-radius: 6px;
											-moz-border-radius: 6px;
											border-radius: 6px;
											position: relative;
											border: 1px solid #e0dddd;';
			
					// if default counter style has been chosen
					if ($arrSettings['csbtns_share_count_style'] == 'default') {
				
						// style share count
						$htmlcsbtnsStyle .= 	'color: #555e58;
												background: #f5f5f5;
											}
											.csbtns_sharecount:after {
												border-right-color: #f5f5f5;
											}';
												
					} elseif ($arrSettings['csbtns_share_count_style'] == 'white') {
					
						// show white style share counts
						$htmlcsbtnsStyle .= 	'color: #555e58;
												background: #ffffff;
											}
											.csbtns_sharecount:after {
												border-right-color: #ffffff;
											}';
						
					} elseif ($arrSettings['csbtns_share_count_style'] == 'blue') {
					
						// show blue style share counts
						$htmlcsbtnsStyle .= 	'color: #ffffff;
												background: #42a7e2;
											}
											.csbtns_sharecount:after {
												border-right-color: #42a7e2;
											}';
					}
				} else {
				
					// custom style
					$htmlcsbtnsStyle .= $arrSettings['csbtns_share_count_css'];
				}
			}
			
			// close style tag
			$htmlcsbtnsStyle .= '</style>';
			
			// return
			echo $htmlcsbtnsStyle;
		
		//} // end conditional CSS
		
	}
	
	// --------- Custom Share Buttons ------------ //
	
	// return csbtns settings
	function get_csbtns_settings() {
	
		// globals
		global $wpdb;
		
		// query the db for current csbtns settings
		$arrSettings = $wpdb->get_results("SELECT option_name, option_value
											 FROM $wpdb->options 
											WHERE option_name LIKE 'csbtns_%'");
											
		// loop through each setting in the array
		foreach ($arrSettings as $setting) {
		
			// add each setting to the array by name
			$arrSettings[$setting->option_name] =  $setting->option_value;
		}
	
		// return
		return $arrSettings;	
	}
	
	// get and show Custom Share Buttons
	function show_share_buttons($content, $booShortCode = FALSE, $atts = '') {
	
		// globals
		global $post;
		
		// variables
		$htmlContent = $content;
		$htmlShareButtons = '';
		$strIsWhatFunction = '';
		$pattern = get_shortcode_regex();

		// csbtns_hide shortcode is in the post content and instance is not called by shortcode csbtns
		if (preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches )
			&& array_key_exists( 2, $matches )
			&& in_array('csbtns_hide', $matches[2]) 
			&& $booShortCode == FALSE) {
			
			// exit the function returning the content without the buttons
			return $content;
		}
	
		// get sbba settings
		$arrSettings = get_csbtns_settings();

		// placement on pages/posts/categories/archives/homepage
		if ( (is_page() && $arrSettings['csbtns_pages'] == 'Y') || (is_single() && $arrSettings['csbtns_posts'] == 'Y') || (is_category() && $arrSettings['csbtns_cats_archs'] == 'Y') || (is_archive() && $arrSettings['csbtns_cats_archs'] == 'Y') || (is_home() && $arrSettings['csbtns_homepage'] == 'Y') || $booShortCode == TRUE) {

					
			// if not shortcode
			if (isset($atts['widget']) && $atts['widget'] == 'Y')
				// use widget share text
				$strShareText = $arrSettings['csbtns_widget_text'];
			else 								
				// use normal share text
				$strShareText = $arrSettings['csbtns_share_text'];
						
			// csbtns div
			$htmlShareButtons = '<!-- I got these buttons from mrwebsolution.in :) --><div class="csbtns">';
			
			// center if set so
			$htmlShareButtons.= ($arrSettings['csbtns_align'] == 'center' ? '<div style="text-align:center">' : NULL);
			
			// add custom text if set and set to placement above or left
			if (($strShareText != '') && ($arrSettings['csbtns_text_placement'] == 'above' || $arrSettings['csbtns_text_placement'] == 'left')) {
			
				// check if user has left share link box checked
				if ($arrSettings['csbtns_link_to_ssb'] == 'Y') {
				
					// share text with link
					$htmlShareButtons .= '<a href="http://www.mrwebsolution.in" target="_blank">' . $strShareText . '</a>';
				}
				
				// just display the share text
				else { 
					
					// share text
					$htmlShareButtons .= $strShareText;
				}
				// add a line break if set to above
				($arrSettings['csbtns_text_placement'] == 'above' ? $htmlShareButtons .= '<br/>' : NULL);
			}
			
			// if running standard
			if ($booShortCode == FALSE) {
			
				// use wordpress functions for page/post details
				$urlCurrentPage = get_permalink($post->ID);	
				$strPageTitle = get_the_title($post->ID);
			}	else if ($booShortCode == TRUE) { // if using shortcode
			
				// if custom attributes have been set
				if (isset($atts['url']) && $atts['url'] != '') {
					
					// set page URL and title as set by user
					$urlCurrentPage = (isset($atts['url']) ? $atts['url'] : csbtns_current_url());
					$strPageTitle = (isset($atts['title']) ? $atts['title'] : NULL);
				} else {
					// get page name and url from functions
					$urlCurrentPage = csbtns_current_url();
					$strPageTitle = $_SERVER["SERVER_NAME"];
				}
				
				
			}		
			
			// the buttons!
			$htmlShareButtons.= get_share_buttons($arrSettings, $urlCurrentPage, $strPageTitle);
			
			// add custom text if set and set to placement right or below
			if (($strShareText != '') && ($arrSettings['csbtns_text_placement'] == 'right' || $arrSettings['csbtns_text_placement'] =='below')) {
			
				// add a line break if set to above
				($arrSettings['csbtns_text_placement'] == 'below' ? $htmlShareButtons .= '<br/>' : NULL);
				
				// check if user has left share link box checked
				if ($arrSettings['csbtns_link_to_ssb'] == 'Y') {
				
					// share text with link
					$htmlShareButtons .= '<a href="http://www.mrwebsolution.in" target="_blank">' . $strShareText . '</a>';
				}
				
				// just display the share text
				else { 
					
					// share text
					$htmlShareButtons .= $strShareText;
				}
			}
			
			// close center if set
			$htmlShareButtons.= ($arrSettings['csbtns_align'] == 'center' ? '</div>' : NULL);
			$htmlShareButtons.= '</div>';
			
			// if not using shortcode
			if ($booShortCode == FALSE) {
			
				// switch for placement of csbtns
				switch ($arrSettings['csbtns_before_or_after']) {
				
					case 'before': // before the content
					$htmlContent = $htmlShareButtons . $content;
					break;
					
					case 'after': // after the content
					$htmlContent = $content . $htmlShareButtons;
					break;
					
					case 'both': // before and after the content
					$htmlContent = $htmlShareButtons . $content . $htmlShareButtons;
					break;
				}
			}
			
			// if using shortcode
			else {
			
				// just return buttons
				$htmlContent = $htmlShareButtons;
			}
		}
		
		// return content and Custom Share Buttons
		return $htmlContent;
	}

	// add Custom Share Buttons to content and/or excerpts
	add_filter( 'the_content', 'show_share_buttons');	
	add_filter( 'the_excerpt', 'show_share_buttons');

	// shortcode for adding buttons
	function csbtns_buttons($atts) {
	
		// get buttons - NULL for $content, TRUE for shortcode flag
		$htmlShareButtons = show_share_buttons(NULL, TRUE, $atts);
		
		//return buttons
		return $htmlShareButtons;
	}
	
	// shortcode for hiding buttons
	function csbtns_hide($content) {

	}
	
	// get URL function
	function csbtns_current_url() {
	
		// add http
		$urlCurrentPage = 'http';
		
		// add s to http if required
		if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$urlCurrentPage .= "s";}
		
		// add colon and forward slashes
		$urlCurrentPage .= "://";
		
		// check if port is not 80
		if ($_SERVER["SERVER_PORT"] != "80") {
		
			// include port if needed
			$urlCurrentPage .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			
		} 
		
		// else if on port 80
		else {
		
			// don't include port in url
			$urlCurrentPage .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		
		return $urlCurrentPage;
	}
	
	
	// get set Custom Share Buttons
	function get_share_buttons($arrSettings, $urlCurrentPage, $strPageTitle) {

	// variables
	$htmlShareButtons = '';
	
	// explode saved include list and add to a new array
	$arrSelectedcsbtns = explode(',', $arrSettings['csbtns_selected_buttons']);
	
	// check if array is not empty
	if ($arrSettings['csbtns_selected_buttons'] != '') {
	
		// if show counters option is selected
		if ($arrSettings['csbtns_show_share_count'] == 'Y') {
		
			// set show flag to true
			$booShowShareCount = true;
			
			// if show counters once option is selected
			if ($arrSettings['csbtns_share_count_once'] == 'Y') {
		
				// if not a page or post
				if (!is_page() && !is_single()) {
				
					// set show flag to false
					$booShowShareCount = false;
				}
			}
		}
	
		// for each included button
		foreach ($arrSelectedcsbtns as $strSelected) {
		
			 $strGetButton = 'csbtns_' . $strSelected;
		
			// add a list item for each selected option
			$htmlShareButtons .= $strGetButton($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount);
		}
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get facebook button
function csbtns_facebook($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// facebook share link
	$htmlShareButtons = '<a class="csbtns_facebook_share" href="http://www.facebook.com/sharer.php?u=' . $urlCurrentPage  . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) .'>';
	
	// if not using custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show selected csbtns image
		$htmlShareButtons .= '<img title="Facebook" class="csbtns" alt="Share on Facebook" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/facebook.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Facebook" class="csbtns" src="' . $arrSettings['csbtns_custom_facebook'] . '" alt="Share on Facebook" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getFacebookShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get facebook share count
function getFacebookShareCount($urlCurrentPage) {

	// get results from facebook and return the number of shares
    $htmlFacebookShareDetails = file_get_contents('http://graph.facebook.com/' . $urlCurrentPage);
    $arrFacebookShareDetails = json_decode($htmlFacebookShareDetails, true);
    $intFacebookShareCount =  (isset($arrFacebookShareDetails['shares']) ? $arrFacebookShareDetails['shares'] : 0);
    return ($intFacebookShareCount ) ? $intFacebookShareCount : '0';
}

// get twitter button
function csbtns_twitter($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// format the URL into friendly code
	$twitterShareText = urlencode(html_entity_decode($strPageTitle . ' ' . $arrSettings['csbtns_twitter_text'], ENT_COMPAT, 'UTF-8'));

	// twitter share link
	$htmlShareButtons = '<a class="csbtns_twitter_share" href="http://twitter.com/share?url=' . $urlCurrentPage . '&amp;text=' . $twitterShareText . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Twitter" class="csbtns" alt="Tweet about this on Twitter" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/twitter.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Twitter" class="csbtns" src="' . $arrSettings['csbtns_custom_twitter'] . '" alt="Tweet about this on Twitter" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getTwitterShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get twitter share count
function getTwitterShareCount($urlCurrentPage) {

	// get results from twitter and return the number of shares
    $htmlTwitterShareDetails = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $urlCurrentPage);
    $arrTwitterShareDetails = json_decode($htmlTwitterShareDetails, true);
    $intTwitterShareCount =  $arrTwitterShareDetails['count'];
    return ($intTwitterShareCount ) ? $intTwitterShareCount : '0';
}

// get google+ button
function csbtns_google($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// google share link
	$htmlShareButtons = '<a class="csbtns_google_share" href="https://plus.google.com/share?url=' . $urlCurrentPage  . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Google+" class="csbtns" alt="Share on Google+" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/google.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Share on Google+" class="csbtns" src="' . $arrSettings['csbtns_custom_google'] . '" alt="Google+" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getGoogleShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get google share count
function getGoogleShareCount($urlCurrentPage) {

	 $args = array(
            'method' => 'POST',
            'headers' => array(
                // setup content type to JSON 
                'Content-Type' => 'application/json'
            ),
            // setup POST options to Google API
            'body' => json_encode(array(
                'method' => 'pos.plusones.get',
                'id' => 'p',
                'method' => 'pos.plusones.get',
                'jsonrpc' => '2.0',
                'key' => 'p',
                'apiVersion' => 'v1',
                'params' => array(
                    'nolog'=>true,
                    'id'=> $urlCurrentPage,
                    'source'=>'widget',
                    'userId'=>'@viewer',
                    'groupId'=>'@self'
                ) 
             )),
             // disable checking SSL sertificates               
            'sslverify'=>false
        );
     
    // retrieves JSON with HTTP POST method for current URL  
    $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
     
    if (is_wp_error($json_string)){
        // return zero if response is error                             
        return "0";             
    } else {        
        $json = json_decode($json_string['body'], true);                    
        // return count of Google +1 for requsted URL
        return intval( $json['result']['metadata']['globalCounts']['count'] ); 
    }
}

// get diggit button
function csbtns_diggit($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// diggit share link
	$htmlShareButtons = '<a class="csbtns_diggit_share" class="csbtns_share_link" href="http://www.digg.com/submit?url=' . $urlCurrentPage  . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Digg" class="csbtns" alt="Digg this" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/diggit.png" />';
	}
	
	// if using custom images
	else {
		
		// show custom image
		$htmlShareButtons .= '<img title="Digg" class="csbtns" src="' . $arrSettings['csbtns_custom_diggit'] . '" alt="Digg this" />';			
	}
	
	// close href
	$htmlShareButtons .= '</a>';

	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get reddit button
function csbtns_reddit($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// reddit share link
	$htmlShareButtons = '<a class="csbtns_reddit_share" href="http://reddit.com/submit?url=' . $urlCurrentPage  . '&amp;title=' . $strPageTitle . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Reddit" class="csbtns" alt="Share on Reddit" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/reddit.png" />';
	}
	
	// if using custom images
	else {
		
		// show custom image
		$htmlShareButtons .= '<img title="Reddit" class="csbtns" src="' . $arrSettings['csbtns_custom_reddit'] . '" alt="Share on Reddit" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		// get and display share count
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getRedditShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get reddit share count
function getRedditShareCount($urlCurrentPage) {

	// get results from reddit and return the number of shares
    $htmlRedditShareDetails = file_get_contents('http://www.reddit.com/api/info.json?url=' . $urlCurrentPage);
	$arrRedditResult = json_decode($htmlRedditShareDetails, true);
    $intRedditShareCount = (isset($arrRedditResult['data']['children']['0']['data']['score']) ? $arrRedditResult['data']['children']['0']['data']['score'] : 0);
    return ($intRedditShareCount ) ? $intRedditShareCount : '0';
}

// get linkedin button
function csbtns_linkedin($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// linkedin share link
	$htmlShareButtons = '<a class="csbtns_linkedin_share" class="csbtns_share_link" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=' . $urlCurrentPage  . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Linkedin" class="csbtns" alt="Share on LinkedIn" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/linkedin.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="LinkedIn" class="csbtns" src="' . $arrSettings['csbtns_custom_linkedin'] . '" alt="Share on LinkedIn" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		// get and display share count
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getLinkedinShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get linkedin share count
function getLinkedinShareCount($urlCurrentPage) {

	// get results from linkedin and return the number of shares
    $htmlLinkedinShareDetails = file_get_contents('http://www.linkedin.com/countserv/count/share?url=' . $urlCurrentPage);
	$htmlLinkedinShareDetails = str_replace('IN.Tags.Share.handleCount(', '', $htmlLinkedinShareDetails);
    $htmlLinkedinShareDetails = str_replace(');', '', $htmlLinkedinShareDetails);
    $arrLinkedinShareDetails = json_decode($htmlLinkedinShareDetails, true);
    $intLinkedinShareCount =  $arrLinkedinShareDetails['count'];
    return ($intLinkedinShareCount ) ? $intLinkedinShareCount : '0';
}

// get pinterest button
function csbtns_pinterest($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// pinterest share link
	$htmlShareButtons = "<a class='csbtns_pinterest_share' href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'>";
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Pinterest" class="csbtns" alt="Pin on Pinterest" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/pinterest.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Pinterest" class="csbtns" src="' . $arrSettings['csbtns_custom_pinterest'] . '" alt="Pin on Pinterest" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getPinterestShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get pinterest share count
function getPinterestShareCount($urlCurrentPage) {

	// get results from pinterest and return the number of shares
    $htmlPinterestShareDetails = file_get_contents('http://api.pinterest.com/v1/urls/count.json?url=' . $urlCurrentPage);
    $htmlPinterestShareDetails = str_replace('receiveCount(', '', $htmlPinterestShareDetails);
    $htmlPinterestShareDetails = str_replace(')', '', $htmlPinterestShareDetails);
    $arrPinterestShareDetails = json_decode($htmlPinterestShareDetails, true);
    $intPinterestShareCount =  $arrPinterestShareDetails['count'];
    return ($intPinterestShareCount ) ? $intPinterestShareCount : '0';
}

// get stumbleupon button
function csbtns_stumbleupon($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// stumbleupon share link
	$htmlShareButtons = '<a class="csbtns_stumbleupon_share" class="csbtns_share_link" href="http://www.stumbleupon.com/submit?url=' . $urlCurrentPage  . '&amp;title=' . $strPageTitle . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="StumbleUpon" class="csbtns" alt="Share on StumbleUpon" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/stumbleupon.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="StumbleUpon" class="csbtns" src="' . $arrSettings['csbtns_custom_stumbleupon'] . '" alt="Share on StumbleUpon" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// if show share count is set to Y
	if ($arrSettings['csbtns_show_share_count'] == 'Y' && $booShowShareCount == true) {
	
		$htmlShareButtons .= '<span class="csbtns_sharecount">' . getStumbleUponShareCount($urlCurrentPage) . '</span>';
	}
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get stumbleupon share count
function getStumbleUponShareCount($urlCurrentPage) {

	// get results from stumbleupon and return the number of shares
    $htmlStumbleUponShareDetails = file_get_contents('http://www.stumbleupon.com/services/1.01/badge.getinfo?url=' . $urlCurrentPage);
    $arrStumbleUponResult = json_decode($htmlStumbleUponShareDetails, true);
    $intStumbleUponShareCount =  (isset($arrStumbleUponResult['result']['views']) ? $arrStumbleUponResult['result']['views'] : 0);
    return ($intStumbleUponShareCount ) ? $intStumbleUponShareCount : '0';
}

// get email button
function csbtns_email($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// email share link
	$htmlShareButtons = '<a class="csbtns_email_share" href="mailto:?Subject=' . $strPageTitle . '&amp;Body=' . $arrSettings['csbtns_email_message'] . '%20' . $urlCurrentPage  . '">';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Email" class="csbtns" alt="Email this to someone" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/email.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Email" class="csbtns" src="' . $arrSettings['csbtns_custom_email'] . '" alt="Email to someone" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get flattr button
function csbtns_flattr($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// check for dedicated flattr URL
	if ($arrSettings['csbtns_flattr_url'] != '') {
	
		// updatae url that will be set to specified URL
		$urlCurrentPage = $arrSettings['csbtns_flattr_url'];
	}

	// flattr share link
	$htmlShareButtons = '<a class="csbtns_flattr_share" href="https://flattr.com/submit/auto?user_id=' . $arrSettings['csbtns_flattr_user_id'] . '&amp;title=' . $strPageTitle . '&amp;url=' . $urlCurrentPage . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';

	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Flattr" class="csbtns" alt="Flattr the author" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/flattr.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Flattr" class="csbtns" src="' . $arrSettings['csbtns_custom_flattr'] . '" alt="Flattr the author" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get buffer button
function csbtns_buffer($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// buffer share link
	$htmlShareButtons = '<a class="csbtns_buffer_share" href="https://bufferapp.com/add?url=' . $urlCurrentPage . '&amp;text=' . ($arrSettings['csbtns_buffer_text'] != '' ? $arrSettings['csbtns_buffer_text'] : NULL) . ' ' . $strPageTitle . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Buffer" class="csbtns" alt="Buffer this page" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/buffer.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Buffer" class="csbtns" src="' . $arrSettings['csbtns_custom_buffer'] . '" alt="Buffer this page" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get tumblr button
function csbtns_tumblr($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// check if http:// is included
	if (preg_match('[http://]', $urlCurrentPage)) {
	
		// remove http:// from URL
		$urlCurrentPage = str_replace('http://', '', $urlCurrentPage);			
	} else if (preg_match('[https://]', $urlCurrentPage)) { // check if https:// is included
	
		// remove http:// from URL
		$urlCurrentPage = str_replace('https://', '', $urlCurrentPage);			
	}

	// strip http:// or https:// from URL (tumblr doesn't work with this set)
	$urlCurrentPage =  str_replace("http://", '', $urlCurrentPage);  

	// tumblr share link
	$htmlShareButtons = '<a class="csbtns_tumblr_share" href="http://www.tumblr.com/share/link?url=' . $urlCurrentPage . '&amp;name=' . $strPageTitle . '" ' . ($arrSettings['csbtns_share_new_window'] == 'Y' ? 'target="_blank"' : NULL) . ($arrSettings['csbtns_rel_nofollow'] == 'Y' ? 'rel="nofollow"' : NULL) . '>';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="tumblr" class="csbtns" alt="Share on Tumblr" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/tumblr.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="tumblr" class="csbtns" src="' . $arrSettings['csbtns_custom_tumblr'] . '" alt="share on Tumblr" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';
	
	// return Custom Share Buttons
	return $htmlShareButtons;
}

// get print button
function csbtns_print($arrSettings, $urlCurrentPage, $strPageTitle, $booShowShareCount) {

	// linkedin share link
	$htmlShareButtons = '<a class="csbtns_print" class="csbtns_share_link" href="#" onclick="window.print()">';
	
	// if image set is not custom
	if ($arrSettings['csbtns_image_set'] != 'custom') {
	
		// show csbtns image
		$htmlShareButtons .= '<img title="Print" class="csbtns" alt="Print this page" src="' . WP_PLUGIN_URL . '/custom-share-buttons/buttons/' . $arrSettings['csbtns_image_set'] . '/print.png" />';
	}
	
	// if using custom images
	else {
	
		// show custom image
		$htmlShareButtons .= '<img title="Print" class="csbtns" src="' . $arrSettings['csbtns_custom_print'] . '" alt="Print this page" />';
	}
	
	// close href
	$htmlShareButtons .= '</a>';

	// return Custom Share Buttons
	return $htmlShareButtons;
}
	
	// register shortcode [csbtns] to show [csbtns_hide]
	add_shortcode( 'csbtns', 'csbtns_buttons' );	
	add_shortcode( 'csbtns_hide', 'csbtns_hide' );	
	
?>
