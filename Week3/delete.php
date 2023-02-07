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

//Sql query to be executed
$sql="DELETE FROM `phptrip` WHERE `dest` = 'USA' LIMIT 3";

// Add new trip in a trip table in the database
$result=mysqli_query($conn, $sql);

//Rows affected after firing query
$aff=mysqli_affected_rows($conn);
echo "No. of affected rows : $aff<br>";

if($result){
    echo "Deleted successfully";
}
else{
    $err=mysqli_error($conn);
    echo "Not Deleted successfully --> $err";
}
?>