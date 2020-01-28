<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "cpses_xz5a9ep4mv";
    $dbpass = "Summer21!";
    $db = "blog";
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}

function CloseCon($conn) {
    $conn -> close();
}

?>