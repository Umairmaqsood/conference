<?php
$ServerName = "localhost";
$Username= "root";
$Password="";
$Dbname="ficseconference";

$conn = mysqli_connect("$ServerName", "$Username", "$Password", "$Dbname");

    if (!$conn) {
        die('Could not connect: ' .mysqli_connect_error());
    }

mysqli_close($conn);
?>