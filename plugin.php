<?php
/**
 * Plugin Name: Oxygen Block Lab Support
 * Plugin URI:  https://github.com/wplit/oxygen-block-lab-support/
 * GitHub URI:  wplit/oxygen-block-lab-support/
 * Description: Allow creation of Block Lab block template without using a theme. Made for Oxygen Builder.
 * Version:     1.0.1
 * Author:      David Browne
 * Author URI:  https://wplit.com/
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenBlockLabSupport
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, David Browne
 * @license    GPL-2.0+
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}


add_filter( 'block_lab_template_path', 'lit_new_block_template_path', 10, 1 );
/**
 * Adds plugin subdirectory as new location for block lab to look for block templates.
 * Templates to be stored in /block_lab_templates/blocks/...
 *
 * @since 1.0.0
 *
 * @param $template_path 
 * @return new template location
 */
function lit_new_block_template_path($template_path) {
    
	$template_path = plugin_dir_path( __FILE__ ) . 'block_lab_templates';
    
	return $template_path;
}
