<?php
use core\Request;
use core\Response;
use core\cache\Factory;
use core\Util;

if (Request::isGet()) {
} else if (Request::isPost()) {

    Factory::create()->delete(Request::post('key'));
    Util::setMessage('success', '削除しました');
    Response::redirect('list');
}
