<?php
/**
 * Here should be a proper doc block.
 *
 * @package theme
 */

/**
 * Here should be a proper doc block.
 */
require 'vendor/autoload.php';

/**
 * Here should be a proper doc block.
 */
require 'src/class-wceu.php';

$timber = new Timber\Timber();

add_filter(
	'wp_title',
	function() {
		return 'WCEU Rocks';
	}
);
