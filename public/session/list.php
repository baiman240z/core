<?php
use core\Request;
use core\Response;
use core\session\Session;
use core\Util;

if (Request::isGet()) {
} else if (Request::isPost()) {
    Session::save(Request::post('key'), Request::post('value'));
    Util::setMessage('success','保存しました');
    Response::redirect('list');
}

$allSessions = Session::get();

include 'views/session/list.php';
