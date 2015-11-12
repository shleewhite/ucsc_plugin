<?php
/*
Plugin Name: UCSC
Plugin URI: --
Description: A plugin that puts UCSC information at the top and bottom of a page.
Version: 0
Author: Lee White
Author URI: --
*/

function hook_css() {

	$output="<style> .wp_head_example { background-color : #f1f1f1; } </style>";

	echo $output;

}

add_action('wp_head','hook_css');

// function ucsc_header() {
// 	echo "<p id='ucsc_header'>THIS IS SOME TEXT.</p>";
// }

// add_action( 'wp_notices', 'ucsc_header' );

// function ucsc_footer() {
// 	echo "<footer id='ucsc_footer'>THIS IS SOME OTHER TEXT.</footer>";
// }

// add_action( 'wp_notices', 'ucsc_footer', 15 );

// function footer_css() {
// 	echo "
// 	<style type='text/css'>
// 	#ucsc_footer {
// 		font-color: red;
// 	}
// 	</style>
// 	";
// }

// add_action( 'wp_footer', 'footer_css' );
?>