<?php
// Récupération du contexte (données globales)

use Timber\Timber;

$context = Timber::context();

// Récupération de la publication à afficher (équivalent de la boucle)
$context['posts'] = Timber::get_posts();
$context['post'] = Timber::get_post();

// Et enfin, on appelle le template
Timber::render( 'templates/single.twig', $context );
