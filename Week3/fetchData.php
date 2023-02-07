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
$sql="SELECT * FROM `phptrip`";

// Add new trip in a trip table in the database
$result=mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo "Records found : ".$num."<br>";

// Display rows returned by the sql query
if($num >0){
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";

// Fetch data

// while loop
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
echo $row['sno'] . ". Hello ". $row['name'] . " Welcome to ".$row['dest'];
    echo "<br>";
}

}

//Update data

//Sql query to be executed
$sql = "UPDATE `phptrip` SET `dest` = 'Jannat' WHERE `name` = 'Jannat'";

// Add new trip in a trip table in the database
$result=mysqli_query($conn, $sql);
// echo "$result<br>"; return true or false;

//Rows affected after firing query
$aff=mysqli_affected_rows($conn);
echo "No. of affected rows : $aff<br>";
if($result){
    echo "Updated successfully";
}
else{
    echo "Not updated";
}

?>