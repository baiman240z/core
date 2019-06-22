<?php
use core\Request;

if (Request::isGet()) {
    $form = [
        'text' => null,
        'textarea' => null,
        'select' => null,
        'radio' => null,
        'checkbox' => [],
    ];
} else if (Request::isPost()) {
    $form = Request::post();
    if (!isset($form['radio'])) { $form['radio'] = null; }
    if (!isset($form['checkbox'])) { $form['checkbox'] = []; }
}

include 'views/form/input.php';
