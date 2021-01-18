<?php
session_start();
ini_set('display_errors', 1);
require '../vendor/autoload.php';

var_dump($_SESSION);
\Core\Route::start();
