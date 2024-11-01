<?php
	
if( !defined( 'ABSPATH' ) && !defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();

// Delete WFS Let It Snow Options from WordPress install

delete_option( 'wfs_letitsnow_options' );