<?php
ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);

require_once('./vendor/autoload.php');
require_once('./env.php');
require_once('./src/slimConfiguration.php');
require_once('./src/jwtAuth.php');
require_once('./routes/index.php');

