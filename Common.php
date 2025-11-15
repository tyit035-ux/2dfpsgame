<?php

$dbName = "unity2dfps";
$dbHost = "127.0.0.1";
$dbPass = "kaifk123";
$db = "unity2dfps";

$secretKey = "123456789";

function dbConnect(){

    global $dbName;
    global $secretKey;

    $link = new mysqli("pdb23.awardspace.net", "2624038_dimitar", "kaifk123", "2624038_dimitar")
     or die("Connection failed. %s\n" . $link -> error);

     return $link; 
}

function safe($var){
    $var = addslashes(trim($var));

    return $var;
}

function fail($errMsg){
    print $errMsg;

    exit;
}

function CloseConnection($link){
    $link -> close();
}


?>

