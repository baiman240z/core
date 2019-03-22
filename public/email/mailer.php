<?php
use core\Request;
use core\Mailer;
use core\Util;

if (Request::isGet()) {
} else if (Request::isPost()) {
    Mailer::build()
        ->from(Request::post('sender'))
        ->subject(Request::post('subject'))
        ->body(Request::post('body'))
        ->send(Request::post('receiptto'))
        ->disconnect()
    ;
    Util::setMessage('success', '送信しました');
}

include 'views/email/mailer.php';
