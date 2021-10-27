<?php
/*
Plugin Name: DP Plugin Demo
Plugin URI:  http://google.com
Description: This plugin does nothing
Version:     1.0
Author:      Danny Pfeiffer
Author URI:  https://pantheon.io
License:     GPL2 etc
License URI: https://google.com
*/

/*Use this function to replace a single word*/
function dp_plugin_demo_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'dp_plugin_demo_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function dp_plugin_demo_content_replace( $content ) {
	$search  = array( 'wordpress', 'goat', 'Easter', '70', 'sensational' );
	$replace = array( 'WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'dp_plugin_demo_content_replace' );

/*Use this function to add a note at the end of your content*/
function dp_plugin_demo_content_footer_note( $content ) {
	$content .= '<footer class="content-footer">Footer block that should not be here</footer>';
	return $content;
}
add_filter( 'the_content', 'dp_plugin_demo_content_footer_note' );

?>