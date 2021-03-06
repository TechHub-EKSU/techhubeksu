<?php

return [
  'name' => env('APP_NAME', 'TechHub EKSU'),
  'manifest' => [
    'name' => env('APP_NAME', 'TechHub EKSU'),
    'short_name' => env('APP_NICK', 'TechHub'),
    'description' => 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build',
    'start_url' => '/',
    'background_color' => '#ffffff',
    'theme_color' => '#934590',
    'display' => 'standalone',
    'orientation'=> 'portrait',
    'status_bar'=> '#934590',
    'lang' => 'en-US',
    'icons' => [
      '72x72' => [
        'path' => '/assets/images/icons/icon-72x72.png',
        'purpose' => 'any'
      ],
      '96x96' => [
        'path' => '/assets/images/icons/icon-96x96.png',
        'purpose' => 'any'
      ],
      '128x128' => [
        'path' => '/assets/images/icons/icon-128x128.png',
        'purpose' => 'any'
      ],
      '144x144' => [
        'path' => '/assets/images/icons/icon-144x144.png',
        'purpose' => 'any'
      ],
      '152x152' => [
        'path' => '/assets/images/icons/icon-152x152.png',
        'purpose' => 'any'
      ],
      '192x192' => [
        'path' => '/assets/images/icons/icon-192x192.png',
        'purpose' => 'any'
      ],
      '384x384' => [
        'path' => '/assets/images/icons/icon-384x384.png',
        'purpose' => 'any'
      ],
      '512x512' => [
        'path' => '/assets/images/icons/icon-512x512.png',
        'purpose' => 'any'
      ],
    ],
    'splash' => [
      '640x1136' => '/assets/images/icons/splash-640x1136.png',
      '750x1334' => '/assets/images/icons/splash-750x1334.png',
      '828x1792' => '/assets/images/icons/splash-828x1792.png',
      '1125x2436' => '/assets/images/icons/splash-1125x2436.png',
      '1242x2208' => '/assets/images/icons/splash-1242x2208.png',
      '1242x2688' => '/assets/images/icons/splash-1242x2688.png',
      '1536x2048' => '/assets/images/icons/splash-1536x2048.png',
      '1668x2224' => '/assets/images/icons/splash-1668x2224.png',
      '1668x2388' => '/assets/images/icons/splash-1668x2388.png',
      '2048x2732' => '/assets/images/icons/splash-2048x2732.png',
    ],
    'shortcuts' => [
      [
        'name' => 'Register',
        'description' => 'Register on TechHub EKSU',
        'url' => '/register',
        'icons' => [
          "src" => "/assets/images/icons/icon-96x96.png",
          "purpose" => "any"
        ]
      ],
      [
        'name' => 'Login',
        'description' => 'Login on TechHub EKSU',
        'url' => '/login',
        'icons' => [
          "src" => "/assets/images/icons/icon-96x96.png",
          "purpose" => "any"
        ]
      ],
    ],
    'custom' => [
      'techhub' => 'TechHub EKSU',
      'emmanueljet' => 'Emmanuel Joseph(JET)',
    ]
  ]
];