<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'create_empresa' => [[], ['_controller' => 'App\\Controller\\EmpresaController::create'], [], [['text', '/empresa/create']], [], [], []],
    'get_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::get'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/empresa']], [], [], []],
    'update_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empresa']], [], [], []],
    'delete_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empresa']], [], [], []],
    'list_empresas' => [[], ['_controller' => 'App\\Controller\\EmpresaController::list'], [], [['text', '/empresa/empresas']], [], [], []],
    'app_protected_index' => [[], ['_controller' => 'App\\Controller\\ProtectedController::index'], [], [['text', '/api/protected']], [], [], []],
    'create_socio' => [[], ['_controller' => 'App\\Controller\\SocioController::create'], [], [['text', '/socio/create']], [], [], []],
    'get_socio' => [['id'], ['_controller' => 'App\\Controller\\SocioController::get'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/socio']], [], [], []],
    'update_socio' => [['id'], ['_controller' => 'App\\Controller\\SocioController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/socio']], [], [], []],
    'delete_socio' => [['id'], ['_controller' => 'App\\Controller\\SocioController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/socio']], [], [], []],
    'list_socios' => [[], ['_controller' => 'App\\Controller\\SocioController::list'], [], [['text', '/socio/socios']], [], [], []],
];
