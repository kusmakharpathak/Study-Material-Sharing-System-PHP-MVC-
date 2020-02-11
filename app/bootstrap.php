<?php
//Load 'config
require_once 'config/config.php';
//load helper
require_once 'helpers/url_helper.php';

//session helper

require_once 'helpers/session_helper.php';
require_once 'config/email.php';
// Autoload core Lib
spl_autoload_register(function ($className){
    require_once 'lib/'.$className.'.php';
});