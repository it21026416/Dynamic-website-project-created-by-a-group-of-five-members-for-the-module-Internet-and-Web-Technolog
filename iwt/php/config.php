<?php
$server="localhost";
$username="root";
$password="";
$dbname="register"; //change 

//create connection
$conn=new mysqli($server, $username, $password, $dbname);

//check connection
if ($conn -> connect_error)
{
die("Connection failes: ". $conn ->connect_error);
}
?>