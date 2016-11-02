<?php
use core\Request;
use core\db\Factory;
use core\session\Session;

if (Request::isGet()) {
    $db = Factory::singleton();
    $page = $db->page("
        SELECT * FROM hoge ORDER BY hoge_id
    ", [], Request::get('page'));
    Session::save('REQUEST_URI', Request::server('REQUEST_URI'));
    include 'views/database/list.php';
} else if (Request::isPost()) {
}
