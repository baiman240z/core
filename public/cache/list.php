<?php
use core\Request;
use core\Response;
use core\cache\Factory;
use core\Util;

$cache = Factory::create();

if (Request::isGet()) {
} else if (Request::isPost()) {
    $cache->save(Request::post('key'), Request::post('value'), Request::post('ttl') ? Request::post('ttl') : 0);
    Util::setMessage('success', '保存しました');
    Response::redirect('list');
}

$caches = [];
foreach ($cache->keys() as $key) {
    $caches[$key] = [
        'value' => $cache->get($key),
        'ttl' => $cache->ttl($key)
    ];
}

include 'views/cache/list.php';
