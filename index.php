<?php
require('autoload.php');

use MyApp\database\DbConnetion;

$conn = new DbConnetion();
header('Location: app/views/main.php');
exit;
