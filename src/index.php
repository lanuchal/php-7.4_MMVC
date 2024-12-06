<?php

require __DIR__ . '/config/constant.php';
require __DIR__ . '/config/autoImport.php';



// read URL path 
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = ltrim($path, '/');
$parts = explode('/', $path);

// set default module and controller
$module = $parts[0] ? $parts[0] : "auth";
$controller = $parts[1] ? $parts[1] : "login";


$controllerFile = ROOT_PATH . '/modules/' . $module . '/controller/' . $controller . '.php';
$layoutFile = ROOT_PATH . '/modules/' . $module . '/layout.php';

if (file_exists($layoutFile)) {
    ob_start();
    if (file_exists($controllerFile)) {
        include $controllerFile;
        $content = ob_get_clean();
    } else {
        $content = "ไม่เจอหน้านี้";
    }
    include $layoutFile;
    exit;
}

// if (file_exists($controllerFile) && file_exists($layoutFile)) {
//     ob_start();
//     include $controllerFile;
//     $content = ob_get_clean();
//     include $layoutFile;
//     exit;
// }

// url not found
http_response_code(404);
$content = '<h1>404 - Page Not Found</h1><p>The page you are looking for does not exist.</p>';
$layoutFile = ROOT_PATH . '/404.php';
include $layoutFile;
