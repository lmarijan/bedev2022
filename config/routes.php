<?php

use App\Controller\GenreController;
use App\Controller\SiteController;
use Core\Router;

return [
    'GET' => [
        '/about' => [SiteController::class, 'about'],
        '/contact' => [SiteController::class, 'contact'],
        '/genres' => [GenreController::class, 'index']
    ],
    'POST' => [

    ]
];