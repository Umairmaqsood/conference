<?php
$ServerName = "localhost";
$Username= "root";
$Password="";
$Dbname="ficseconference";

$conn = mysqli_connect("$ServerName", "$Username", "$Password", "$Dbname");

if(!$conn){
    die("Connection Failed").mysqli_connect_error();
}
mysqli_close($conn);
?>