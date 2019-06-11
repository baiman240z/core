<?php

use core\db\Factory;
use core\Request;
use core\Response;
use core\session\Session;
use core\Util;

if (Request::isGet()) {
} else if (Request::isPost()) {
    try {
        Factory::singleton()->exec('DELETE FROM hoge WHERE hoge_id = ?', Request::post('id'));
        Util::setMessage('success', 'Deleted');
    } catch (Exception $ex) {
        Util::setMessage('error', $ex->getMessage());
    }

    Response::redirect(Session::get('REQUEST_URI'));
}
