<?php
ini_set('include_path', '.:' . __DIR__);
require_once __DIR__ . '/../vendor/autoload.php';

ob_start(function($contents)
{
    return $contents;
});
