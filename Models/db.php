<?php

$dbhost = "127.0.0.1:8082";
$dbuser = "root";
$dbpass = "";
$dbname = "userlogin";

function getConnection(){
    global $dbhost;
    global $dbuser;
    global $dbpass;
    global $dbname;

    return  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

?>