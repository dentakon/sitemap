<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'Sitemap',
    'title'       => array(
        'de' => 'Sitemap',
        'en' => 'Sitemap',
    ),
    'description' => array(
        'de' => '<h2>Modul zum Erstellen einer Sitemap</h2>',
        'en' => '<h2>Module to show create an Sitemap</h2>',
    ),
    'thumbnail'   => 'out/pictures/',
    'version'     => '1.0.0',
    'author'      => 'David Hennig | Dentakon dentale Konzepte',
    'url'         => 'https://www.dentakon.de',
    'email'       => 'davidhennig@dentakon.de',
    'extend'      => array(
    ),

    'controllers' => array(
      'sitemap' => \dentakon\Sitemap\Controller\Sitemap::class,
    ),

    'templates'   => array(
    ),
    'blocks'      => array(
    ),
    'settings'    => array(),
    'events' => array(),
);
