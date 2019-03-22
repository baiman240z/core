<?php

use core\Config;
use core\Request;

$url = preg_replace('/\?.*$/', '', Request::server('REQUEST_URI'));
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo Config::baseurl() ?>">Sandbox</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">メニュー</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo preg_match("@/form/@", $url) ? "active" : "" ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Form <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::baseurl() ?>form/upload">File upload</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo preg_match("@/email/@", $url) ? "active" : "" ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">e-Mail <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::baseurl() ?>email/mailer">Mailer</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo preg_match("@/database/@", $url) ? "active" : "" ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Database <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::baseurl() ?>database/list">List</a></li>
                        <li><a href="<?php echo Config::baseurl() ?>database/form">Form</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo preg_match("@/session/@", $url) ? "active" : "" ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Session<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::baseurl() ?>session/list">List</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo preg_match("@/cache/@", $url) ? "active" : "" ?>">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cache<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::baseurl() ?>cache/list">List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
