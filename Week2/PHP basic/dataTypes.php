<?php 

/* php data types :
1. String
2. Intrger
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// 1. String
$name = 'sumit';
$income=200;

echo "$name my name<br>";

// 2. Integer : non decimal number
$income=233;
$price=-123;
echo "$income & $price<br>";

// Float - decimal point number

$income = 344.5;
$price =-123.5;
echo "$income & $price<br>";

// Boolean - true or false

$x= true;
$y= false; //return blank string

echo var_dump($x);
echo"<br>";
echo var_dump($y);
echo"<br>";


// object - instances of classes
// Employee is a class - sumit can be object

//Array - Used to stor multiple values in singlr variable

$friends = array("A","B","C");
echo var_dump($friends);
echo"<br>";
echo $friends[0];
echo"<br>";
echo $friends[1];
echo"<br>";
echo $friends[2];
echo"<br>";
// echo $friends[3]; array start with 0

$name=NULL;
echo $name;
echo var_dump($name);
?>