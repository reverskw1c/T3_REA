<?php
session_start();
$_SESSION["docent"] = "Wessels";
$_SESSION["lokaal"] = "1250";

var_dump($_SESSION);