<?php
use core\Request;
use core\db\Factory;

$db = Factory::singleton();
if (Request::isGet()) {
    if (Request::get('id')) {
        $form = $db->row('SELECT * FROM hoge WHERE hoge_id = ?', Request::get('id'));
    } else {
        $form = [
            'hoge_id' => null,
            'title' => '',
            'body' => '',
        ];
    }
} else if (Request::isPost()) {
    $form = Request::post();
}

include 'views/database/form.php';
