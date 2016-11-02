<?php
use core\Request;
use core\db\Factory;

if (Request::isGet()) {
    $db = Factory::singleton('mysqli');
    $result = $db->result('SELECT * FROM hoge');
    header('Content-Type: text/plain');
    echo $result->total() . "\n";
    while ($row = $result->row()) {
        print_r($row);
    }
} else if (Request::isPost()) {
}
