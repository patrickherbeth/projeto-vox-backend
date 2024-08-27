<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/empresa/create' => [[['_route' => 'create_empresa', '_controller' => 'App\\Controller\\EmpresaController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/protected' => [[['_route' => 'app_protected_index', '_controller' => 'App\\Controller\\ProtectedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/socio/create' => [[['_route' => 'create_socio', '_controller' => 'App\\Controller\\SocioController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/empresa/(?'
                    .'|(\\d+)(*:186)'
                    .'|([^/]++)(?'
                        .'|(*:205)'
                    .')'
                    .'|empresas(*:222)'
                .')'
                .'|/socio/(?'
                    .'|(\\d+)(*:246)'
                    .'|([^/]++)(?'
                        .'|(*:265)'
                    .')'
                    .'|socios(*:280)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'get_empresa', '_controller' => 'App\\Controller\\EmpresaController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [
            [['_route' => 'update_empresa', '_controller' => 'App\\Controller\\EmpresaController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_empresa', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        222 => [[['_route' => 'list_empresas', '_controller' => 'App\\Controller\\EmpresaController::list'], [], ['GET' => 0], null, false, false, null]],
        246 => [[['_route' => 'get_socio', '_controller' => 'App\\Controller\\SocioController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [
            [['_route' => 'update_socio', '_controller' => 'App\\Controller\\SocioController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_socio', '_controller' => 'App\\Controller\\SocioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        280 => [
            [['_route' => 'list_socios', '_controller' => 'App\\Controller\\SocioController::list'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
