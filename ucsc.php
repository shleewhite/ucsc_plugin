<?php
/*
Plugin Name: UCSC
Plugin URI: --
Description: A plugin that puts UCSC information at the top and bottom of a page.
Version: 0
Author: Lee White
Author URI: --
*/

function ucsc_header() {
	echo "<p id='ucsc_header'>THIS IS SOME TEXT.</p>";
}

add_action( 'admin_notices', 'ucsc_header' );

function ucsc_footer() {
	echo "<footer id='ucsc_footer'>THIS IS SOME OTHER TEXT.</footer>";
}

add_action( 'admin_notices', 'ucsc_footer', 15 );

function footer_css() {
	echo "
	<style type='text/css'>
	#ucsc_footer {
		font-color: red;
	}
	</style>
	";
}

add_action( 'admin_head', 'footer_css' );

?>