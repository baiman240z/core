<?php

use core\Config;
use core\Request;

$url = preg_replace('/\?.*$/', '', Request::server('REQUEST_URI'));
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3 shadow">
    <a class="navbar-brand" href="<?php echo Config::baseurl() ?>">PHP Core</a>
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
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>form/input">Input</a>
                    <a class="dropdown-item" href="<?php echo Config::baseurl() ?>form/upload">File upload</a>
                </div>
            </li>
            <li class="nav-item <?php echo preg_match("@/database/@", $url) ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo Config::baseurl() ?>database/list">
                    Database
                </a>
            </li>
            <li class="nav-item <?php echo preg_match("@/session/@", $url) ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo Config::baseurl() ?>session/list">
                    Session
                </a>
            </li>
            <li class="nav-item <?php echo preg_match("@/cache/@", $url) ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo Config::baseurl() ?>cache/list">
                    Cache
                </a>
            </li>
            <li class="nav-item <?php echo preg_match("@/email/@", $url) ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo Config::baseurl() ?>email/mailer">
                    e-Mail
                </a>
            </li>
        </ul>
    </div>
</nav>
