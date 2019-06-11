<?php
use core\Request;

if (Request::isGet()) {
} else if (Request::isPost()) {
    include 'views/database/confirm.php';
}
