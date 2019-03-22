<?php
use core\Request;

if (Request::isGet()) {
} else if (Request::isPost()) {
    $file = Request::file('file');
    $sha256 = hash('SHA256', $file['data']);
}

include 'views/form/upload.php';
