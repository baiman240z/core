<?php

use core\Config;
use core\Request;

$url = preg_replace('/\?.*$/', '', Request::server('REQUEST_URI'));
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3 shadow">
    <a class="navbar-brand" href="<?php echo Config::baseurl() ?>">Sandbox</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo preg_match("@/form/@", $url) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Form
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>form/upload">File upload</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo preg_match("@/email/@", $url) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    e-Mail
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>email/mailer">Mailer</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo preg_match("@/database/@", $url) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Database
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>database/list">List</a>
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>database/form">Form</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo preg_match("@/session/@", $url) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Session
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>session/list">List</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo preg_match("@/cache/@", $url) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cache
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>cache/list">List</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
