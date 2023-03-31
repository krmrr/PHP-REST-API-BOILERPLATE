<?php 
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');

// Show No Error
// error_reporting(E_ALL); ini_set("display_errors", 1);
?>