<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_mars' => [[], ['_controller' => 'App\\Controller\\MarsController::index'], [], [['text', '/mars']], [], [], []],
    'app_curiosity' => [[], ['_controller' => 'App\\Controller\\MarsController::app_curiosity'], [], [['text', '/curiosity']], [], [], []],
    'app_Search' => [[], ['_controller' => 'App\\Controller\\SearchController::app_Search'], [], [['text', '/search']], [], [], []],
    'search' => [['query'], ['query' => null, '_controller' => 'App\\Controller\\SearchController::searchAction'], [], [['variable', '/', '[^/]++', 'query', true], ['text', '/search']], [], [], []],
    'searchback' => [['query'], ['_controller' => 'App\\Controller\\SearchController::searchback'], [], [['variable', '/', '[^/]++', 'query', true], ['text', '/searchback']], [], [], []],
];
