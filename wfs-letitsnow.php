<?php
/*
 *  Plugin Name: WFS Let It Snow
 *  Plugin URI: http://wordpress.org/plugin/wfs-let-it-snow
 *  Description: A seasonal plugin that makes snow fall on your WordPress website.
 *  Version: 2.0.0
 *  Author: Winking Frog Studios
 *  Author URI: http://winkingfrog.com
 *  Licence: GPLv2
 *  Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 *  Domain Path: /languages
 *  Text Domain: wfs-letitsnow
 *
 
 *	Copyright 2015 Winking Frog Studios Ltd (support@winkingfrog.com)
 *	
 *	WFS Let It Snow is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License, version 2, as
 *	published by the Free Software Foundation.
 *	
 *	WFS Let It Snow is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License 
 *	along with WFS Testimonials;
 *	if not, see https://www.gnu.org/licenses/gpl-2.0.html
 */

/** 
 * Activation Settings
 */
 
define( 'WFS_LIS_VERSION', '2.0.0' );

register_activation_hook( __FILE__, 'wfs_letitsnow_activate' );

function wfs_letitsnow_activate() {
	
	global $wp_version;
	
	if ( version_compare( $wp_version, '4.0', '<' ) ) {
		
		wp_die( 'WFS Let It Snow plugin requires WordPress version 4.0 or higher, please update.' );
		
	}
	
	$default_options = array(
		'status'		=> false,
		'scope'			=> 'homepage',
		'flakeCount'	=> 700,
		'minSize'		=> 1,
		'maxSize'		=> 5,
		'minSpeed'		=> 1,
		'maxSpeed'		=> 5,
		'shadow'		=> false	
	);
	
	update_option( 'wfs_letitsnow_options', $default_options );
	
}

/**
 * Admin Settings Page
 */

add_action( 'admin_menu', 'wfs_letitsnow_settings_menu' );

function wfs_letitsnow_settings_menu() {
	
	add_options_page(
		__( 'WFS Let It Snow Options', 'wfs-letitsnow' ),
		__( 'WFS Let It Snow', 'wfs-letitsnow' ),
		'manage_options',
		'wfs-letitsnow',
		'wfs_letitsnow_options_page'
	);
	
}

add_action( 'admin_init', 'wfs_letitsnow_register_settings' );

function wfs_letitsnow_register_settings() {
	
	register_setting(
		'wfs-letitsnow-group',
		'wfs_letitsnow_options',
		'wfs_sanitize_options'
	);
	
}

function wfs_sanitize_options( $options ) {
	
	$options['status'] = ( $options['status'] == 'true' ? true : false );
	$options['shadow'] = ( $options['shadow'] == 'true' ? true : false );
	
	return $options;
	
}

function wfs_letitsnow_options_page() {
	
	require_once( 'inc/settings-page.php' );
	
}

/**
 * Add a settings link to the Plugins page
 */

add_action ('after_setup_theme', 'wfs_letitsnow_after_setup_theme');

function wfs_letitsnow_settings_link( $links ) {
	
    $url = get_admin_url() . 'options-general.php?page=wfs-letitsnow';
    $settings_link = '<a href="' . $url . '">' . __('Settings', 'wfs-letitsnow') . '</a>';
    
    array_unshift( $links, $settings_link );
    
    return $links;
}
 
function wfs_letitsnow_after_setup_theme() {
	
     add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'wfs_letitsnow_settings_link');
}

/**
 * Plugin Styles & Scripts 
 */
 
function wfs_letitsnow_enqueue() {
	
	$lis_options = get_option( 'wfs_letitsnow_options' );
	
	wp_register_script( 'wfs_lis_settings', plugins_url( 'assets/js/wfs-letitsnow.js', __FILE__ ), array( 'jquery', 'wfs_lis_snowfall' ), '', true );
	
	wp_localize_script( 'wfs_lis_settings', 'lis_options', $lis_options );
	
	wp_enqueue_script( 'wfs_lis_snowfall', plugins_url( 'assets/js/snowfall.jquery.min.js', __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_script( 'wfs_lis_settings' );
	
}

/**
 * Initiate the snowfall!
 */

if( !is_admin() ) { add_action( 'wp', 'wfs_letitsnow_init' ); }

function wfs_letitsnow_init() {
	
	$lis_options = get_option( 'wfs_letitsnow_options' );
	
	if( $lis_options['status'] == true ) {
		
		if( $lis_options['scope'] == 'homepage' ) {
			
			if( ( is_front_page() && is_home() ) || is_front_page() ) {
				
				add_action( 'wp_enqueue_scripts', 'wfs_letitsnow_enqueue' );
				
			}
			
		}
		
		if( $lis_options['scope'] == 'site' ) {
			
			add_action( 'wp_enqueue_scripts', 'wfs_letitsnow_enqueue' );
			
		}
		
	}
	
}

/**
 * Deactivation Settings
 */
 
register_deactivation_hook( __FILE__, 'wfs_letitsnow_deactivate' );

function wfs_letitsnow_deactivate() {
	
	// Nothing for this bit so far!
	
}

