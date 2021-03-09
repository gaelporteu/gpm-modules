<?php
/**
 * Plugin Name: GPM Map Module
 * Plugin URI: https://gaelporteu.ca
 * Description: A custom map plugin for Beaver Builder.
 * Version: 1.0
 * Author: Gaël Porteu
 * Author URI: https://gaelporteu.ca
 */

define( 'GPM_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'GPM_MODULES_URL', plugins_url( '/', __FILE__ ) );

function gpm_modules() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'gpm-modules/gpm_map/gpm_map.php';
    }
  }
  add_action( 'init', 'gpm_modules' );