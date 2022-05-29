<?php

test('Title filter', function () {
	$wp_title = wp_title( '&raquo;', false );

	expect( $wp_title )
		->toBe( 'WCEU is cool' );
});