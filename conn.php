<?php

$dbServername = "ID329130_aronc.db.webhosting.be";
$dbUsername = "ID329130_aronc";
$dbPassword = "Lol13579";
$dbName = "ID329130_aronc";

// Make the connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
	die("Connection failed"); 
    //echo("fail");     //testing connection
}
else{
    //echo("succes");    //testing connection
}
echo("<br>");
