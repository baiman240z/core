<?php
use core\Request;
use core\Response;
use core\Util;
use core\session\Session;
use core\db\Factory;

$db = Factory::singleton();
if (Request::isGet()) {
    if (Request::get('id')) {
        $form = $db->row('SELECT * FROM hoge WHERE hoge_id = ?', Request::get('id'));
    } else {
        $form = [
            'title' => '',
            'body' => '',
        ];
    }
} else if (Request::isPost()) {
    if (Request::get('id')) {
        $sql = '
            UPDATE hoge SET title = :title, body = :body, updated_at = NOW()
            WHERE hoge_id = :hoge_id
        ';
        $db->exec($sql, [
            'hoge_id' => Request::get('id'),
            'title' => Request::post('title'),
            'body' => Request::post('body')
        ]);
        Util::setMessage('更新しました');
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
        Util::setMessage('追加しました');
        Response::redirect('list');
    }
}

include 'views/database/form.php';
