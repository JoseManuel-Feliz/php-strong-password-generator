<?php

//IMPORT VARS AND FUNCTIONS FILE
require_once __DIR__ . "/partials/vars.php";
require_once __DIR__ . "/partials/functions.php";

//SESSION START
session_start();


//SET SESSION VARIABLE
$_SESSION['password'] = strong_passGenerator($password_length);
