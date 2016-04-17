<?php
/**
 * @since       0.0.1
 * @package     JKL_Unit_Converter
 * @author      Aaron Snowberger <jekkilekki@gmail.com>
 * 
 * @wordpress-plugin
 * Plugin Name: JKL Unit Converter
 * Plugin URI:  https://github.com/jekkilekki/plugin-jkl-unit-converter
 * Description: A simple Unit Converter widget that allows you to between various units. (Inspired by Google's Unit Converter.)
 * Version:     0.0.1
 * Author:      Aaron Snowberger
 * Author URI:  http://www.aaronsnowberger.com
 * Text Domain: jkl-unit-converter
 * License:     GPL2
 * 
 * Requires at least: 3.5
 * Tested up to: 4.5
 */

/**
 * JKL Unit Converter allows you to easily convert between different types of units.
 * Copyright (C) 2016  AARON SNOWBERGER (email: JEKKILEKKI@GMAIL.COM)
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Plugin Notes:
 * 
 * 
 */

/* Prevent direct access */
if ( ! defined( 'WPINC' ) ) die;

/*
 * The class that represents the MAIN JKL ADMIN settings page
 */

/*
 * The class that represents and defines the core plugin 
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-jkl-unit-converter.php';

/*
 * The class that creates the Widget
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-jkl-unit-converter-widget.php';

/*
 * The class that creates the Shortcode
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-jkl-unit-converter-shortcode.php';

/*
 * The function that creates a new JKL_Unit_Converter object and runs the program
 */
function run_unitconverter() {
    // Instantiate the plugin class
    $JKL_Unit_Converter = new JKL_Unit_Converter( 'jkl-unit-converter', '0.0.1' );
}

run_unitconverter();