<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/transactions' => [[['_route' => 'app_services_transactions', '_controller' => 'App\\Controller\\ServicesController::transactions'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add/(\\d+)(*:17)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:52)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        17 => [[['_route' => 'app_subscription_addservice', '_controller' => 'App\\Controller\\SubscriptionController::addService'], ['id'], ['POST' => 0], null, false, true, null]],
        52 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
