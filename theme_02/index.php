<?php
/**
 * Some docs here
 *
 * @package theme
 */

$context          = Timber::get_context();
$context['posts'] = Timber::get_posts();

Timber::render( 'views/index.twig', $context );
