<?php
use core\Util;
use core\Request;
use core\db\Factory;

if (Request::isGet()) {
    $db = Factory::singleton();
    $rset = $db->result('SELECT * FROM hoge');

    $csvFile = 'hoge.csv';
    header('Content-Type: application/octet-stream');
    header('Content-Description: ' . $csvFile);
    header('Content-Disposition: attachment; filename=' . $csvFile);
    while ($row = $rset->row()) {
        echo Util::csvLine($row);
    }

} else if (Request::isPost()) {
}
