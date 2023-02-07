<?php

// Connecting to database
$servername="localhost";
$username="root";
$password="";
$database="dbsumit";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die
if(!$conn){
    die("Failed to connect ". mysqli_connect_error());
}
else{
    echo "Connected successfully !<br>";
}

//variables to be inserted into the table
$name="Sanjay";
$destination="UAE";

//Sql query to be executed
$sql="INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";

// Add new trip in a trip table in the database
$result=mysqli_query($conn, $sql);

if($result){
    echo "Record inserted.";
}
else{
    echo "Record not inserted. ".mysqli_error($conn);
}

?>