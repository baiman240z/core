<?php
use core\Request;
use core\Response;

if (Request::isGet()) {
    Response::redirect('input');
} else if (Request::isPost()) {
    $form = Request::post();
    if (!isset($form['radio'])) { $form['radio'] = null; }
    if (!isset($form['checkbox'])) { $form['checkbox'] = []; }
}

include 'views/form/confirm.php';

