<?php
/*
Plugin Name: DWP-Functions
Plugin URI: https://github.com/shoheiworks/wp-plugin-dwp-functions.git
Description: Functions plugin
Author: DWP-shohei
Author URI: http://designseisaku.com
Version: 0.1.1

License: GPL2

    Copyright 2013 dwp-shoei shoheiworks@gmail.com

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
add_action('admin_menu','functions_menu');
function functions_menu(){
	add_menu_page(
		"Title",
		"FUNCTIONS",
		"administrator",
		"functions",
		"re_admin"
	);
}
function re_admin(){
    require_once('includes/admin-page.php');
}

//REMOVE head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');