<?php

// Recuperation du contexte (données globales)
use Timber\Timber;

$context = Timber::context();
$context['disableSidebar'] = true;
// Et enfin, on appelle le template
Timber::render('templates/404.twig', $context);
