<?php
use core\Request;
use core\Response;
use core\Util;
use core\session\Session;
use core\db\Factory;

if (Request::isGet()) {
} else if (Request::isPost()) {
    $db = Factory::singleton();
    if (Request::post('hoge_id')) {
        $sql = '
            UPDATE hoge SET title = :title, body = :body, updated_at = NOW()
            WHERE hoge_id = :hoge_id
        ';
        $db->exec($sql, [
            'hoge_id' => Request::post('hoge_id'),
            'title' => Request::post('title'),
            'body' => Request::post('body')
        ]);
        Util::setMessage('success', '更新しました');
        Response::redirect(Session::get('REQUEST_URI'));
    } else {
        $sql = '
            INSERT INTO hoge (title, body, created_at, updated_at) VALUES (
                :title, :body, NOW(), NOW()
            )
        ';
        $db->exec($sql, [
            'title' => Request::post('title'),
            'body' => Request::post('body')
        ]);
        Util::setMessage('success', '追加しました');
        Response::redirect(Session::get('REQUEST_URI'));
    }
}
