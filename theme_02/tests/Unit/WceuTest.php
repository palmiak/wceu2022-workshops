<?php
require_once dirname( __FILE__, 2 ) . '/../functions.php';

test(
	'Add test',
	function () {
		$wceu = new Wceu();
		expect( $wceu->calc( 2, 4 ) )->toBe( 6 );
	}
);
