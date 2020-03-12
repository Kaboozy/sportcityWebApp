<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'app_backend_index', '_controller' => 'App\\Controller\\BackendController::index'], null, null, null, false, false, null],
            [['_route' => 'app_backend', '_controller' => 'App\\Controller\\BackendController::index'], null, null, null, false, false, null],
        ],
        '/accueil.html' => [[['_route' => 'app_frontend_index', '_controller' => 'App\\Controller\\FrontendController::index'], null, null, null, false, false, null]],
        '/soumission-image.html' => [[['_route' => 'app_frontend_submitimage', '_controller' => 'App\\Controller\\FrontendController::submitImage'], null, null, null, false, false, null]],
        '/mon-profil.html' => [[['_route' => 'app_frontend_profil', '_controller' => 'App\\Controller\\FrontendController::profil'], null, null, null, false, false, null]],
        '/scan-code-barre.html' => [[['_route' => 'app_frontend_scancode', '_controller' => 'App\\Controller\\FrontendController::scanCode'], null, null, null, false, false, null]],
        '/soumission-information.html' => [[['_route' => 'app_frontend_returninformation', '_controller' => 'App\\Controller\\FrontendController::returnInformation'], null, null, null, false, false, null]],
        '/index.html' => [[['_route' => 'app_frontend', '_controller' => 'App\\Controller\\FrontendController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
