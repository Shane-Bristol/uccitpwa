<?php

return [

    'install-button' => true,

    /*
     PWA Manifest Configuration
     php artisan erag:update-manifest
    */

    'manifest' => [
        'name' => 'UCC IT Department',
        'short_name' => 'UCC IT',
        'background_color' => '#ffffff',
        'display' => 'Standalone',
        'description' => 'A Progressive Web Application setup for Laravel projects.',
        'theme_color' => '#0c1a40',
        'icons' => [
    [
        'src' => 'icons/icon-192.png',
        'sizes' => '192x192',
        'type' => 'image/png',
        'purpose' => 'any',
    ],
    [
        'src' => 'icons/icon-512.png',
        'sizes' => '512x512',
        'type' => 'image/png',
        'purpose' => 'any',
    ],
    [
        'src' => 'icons/icon-512-maskable.png',
        'sizes' => '512x512',
        'type' => 'image/png',
        'purpose' => 'maskable',
    ],
],
    ],

    /*
    Debug Configuration

    */

    'debug' => env('APP_DEBUG', false),

    /*
    Livewire Integration
    */

    'livewire-app' => false,
];
