<?php
session_start();
include_once __DIR__ . '\googleapi\vendor\autoload.php';
$gClient= new Google_Client();
$gClient->setClientId("595345823617-qdc66cjpdekutn62be4fvt1d3uke8dfo.apps.googleusercontent.com");
$gClient->setClientSecret("nWQSakYtI0McB5mE5pEnGdZ-");
$gClient->setApplicationName("Teverah");
$gClient->setRedirectUri("http://localhost:8081/teverah");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");






?>