<?php
/*
Plugin Name: BrightSlider
Plugin URI:  http://themebright.com/go/brightslider/
Description: The ThemeBright slider.
Author:      ThemeBright
Author URI:  http://themebright.com/
Version:     1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Load includes.
 */
$plugin_dir = dirname( __FILE__ );

require_once $plugin_dir . '/includes/post-types.php';

if ( is_admin() ) {
  require_once $plugin_dir . '/includes/admin/admin-support.php';
  require_once $plugin_dir . '/includes/admin/slide-fields.php';
  require_once $plugin_dir . '/includes/library/ct-meta-box/ct-meta-box.php';
}