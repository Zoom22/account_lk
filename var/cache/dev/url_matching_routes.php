<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'app_subscription_add', '_controller' => 'App\\Controller\\SubscriptionController::add'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'app_subscription_delete', '_controller' => 'App\\Controller\\SubscriptionController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/transactions' => [[['_route' => 'transactions', '_controller' => 'App\\Controller\\TransactionController::index'], null, null, null, false, false, null]],
        '/deposit' => [[['_route' => 'app_transaction_deposit', '_controller' => 'App\\Controller\\TransactionController::deposit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
