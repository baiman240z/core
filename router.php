<?php
include __DIR__ . "/app/bootstrap.php";

if (
    preg_match('/\.(?:png|jpg|jpeg|gif|html|css|js|ico|php|eot|svg|ttf|woff|woff2|pdf)/', $_SERVER['REQUEST_URI']) ||
    preg_match('@/$@', $_SERVER['REQUEST_URI'])
) {
    return false;
} else {
    echo __DIR__; exit;
    $uri = preg_replace('/\?.+$/', '', $_SERVER['REQUEST_URI']);
    include trim($uri, '/') . '.php';
}
