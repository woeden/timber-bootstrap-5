<?php
// Récupération du contexte (données globales)
$context = Timber\Timber::context();
// Récupération de la publication à afficher (équivalent de la boucle)
$context['posts'] = Timber\Timber::get_posts();
$context['post'] = Timber\Timber::get_post();
// Et enfin, on appelle le template
Timber::render( 'templates/archive.twig', $context );
