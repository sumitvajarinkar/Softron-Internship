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

// Create a Table in dbsumit
$sql="CREATE TABLE `phptrip` (`sno` INT(6) NOT 
NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , 
`dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))";

$result=mysqli_query($conn, $sql);

// Check for table connection
if($result){
    echo "Table created";
}
else{
    echo "Table not created ".mysqli_error($conn);
}

?>