<?php

$repoUrl = 'https://github.com/geocoder-php/Geocoder';

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Geocoder PHP',
    'siteDescription' => 'The most featured Geocoder library written in PHP',
    'repoUrl' => $repoUrl,

    // Algolia DocSearch credentials
    'docsearchApiKey' => '4b4f0156a1bce73ed44722c1d4f3187a',
    'docsearchIndexName' => 'geocoder-php',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
