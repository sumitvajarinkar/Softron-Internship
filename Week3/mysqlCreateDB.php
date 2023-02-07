<?php
// Connecting to database
$servername="localhost";
$username="root";
$password="";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die
if(!$conn){
    die("Failed to connect ". mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
// Create a DB
$sql="CREATE DATABASE dbsumit";
$result=mysqli_query($conn, $sql);

// Check for database connection
if($result){
    echo "DB created";
}
else{
    echo "DB not created ".mysqli_error($conn);
}
echo var_dump($result);

?>