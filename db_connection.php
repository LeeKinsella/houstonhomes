<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "xzedc5gissli";
    $dbpass = "Summer21!";
    
    $db = "phptest";
    $response;
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);
    if ($conn->connect_errno) {
        $response = 'fail';
    } else {
        $response = 'success';
        $sql = "SELECT Author, Content, Date, Category FROM myTest";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Author: " . $row["Author"]. " - Content: " . $row["Content"]. " - Date: " . $row["Date"]. " - Category: " . $row["Category"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    return $response;
    return $response;
}

function CloseCon($conn) {
    $conn -> close();
}

$connection = OpenCon();

//echo $connection;

//CloseCon($connection);

?>