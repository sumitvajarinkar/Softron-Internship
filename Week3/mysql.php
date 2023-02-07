<?php
echo "MySQL Database<br>";

/*
Ways to connect MySQL Database
1. MySQLi(Improved) extension : i.procedural ii.object oriented (only MySQL)
2. PDO : PHP Data Objects (can work with other databases)
*/

//Connecting to database
$servername="localhost";
$username="root";
$password="";

//Create connection
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Failed to connect ". mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
?>