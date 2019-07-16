<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Access-Control-Allow-Origin: *');

session_start();

require_once "controller/template.controller.php";
require_once "controller/property.controller.php";
require_once "controller/user.controller.php";

require_once "model/template.model.php";
require_once "model/property.model.php";
require_once "model/user.model.php";


require_once "model/url.php";

//require_once "extensions/PHPMailer/PHPMailerAutoload.php";
require_once "vendor/autoload.php";

$template = new ControllerTemplate();
$template -> template();
