<?php

include 'db_connection.php';

$conn = OpenCon();

echo $conn;

CloseCon($conn);

?>