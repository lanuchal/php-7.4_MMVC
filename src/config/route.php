<?php

return [
    '/' => [
        'controller' => 'login',
        'layout' => 'login',
        'module' => 'auth'
    ],
    '/dashboard' => [
        'controller' => 'createJob',
        'layout' => 'dashboard',
        'module' => 'dashboard'
    ],
    '/listJob' => [
        'controller' => 'listJob',
        'layout' => 'dashboard',
        'module' => 'dashboard'
    ],
    '/admin' => [
        'controller' => 'admin-dashboard.php',
        'layout' => 'admin.php',
        'module' => 'auth'
    ],
];
