<!-- <?php

echo "Strings";
echo "<br>";

$name="Sumit Vajarinkar";

echo $name;
echo "<br>";

echo "Length "."of String ".strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"Vaj");
echo "<br>";
echo str_replace("mit","jit",$name);
echo "<br>";
echo str_repeat($name, 5);
echo "<br>";
// echo rtrim("<pre>     this is a good boy   </prev>");
echo "<pre>"; 
echo rtrim("     this is a good boy   ");
echo "<br>";
echo ltrim("     this is a good boy   ");
echo "</pre>"; 
?> -->

<!-- <?php
$a=79;
$b=6;

if($a > 78){
    echo "a > 78";
}
elseif($a > 58){
    echo "a < 58";
}
else{
    echo "Ntng";
}
?> -->

<!-- <?php
$i=0;
while($i<5){
    echo $i+1;
    echo "<br>";
    $i++;
}
?> -->


<!-- <?php
for($i=1;$i<6;$i++){
    echo $i;
    echo"<br>";
}
?> -->

<!-- <?php
$i=0;
do{
    echo $i++;
    echo"<br>";
}while($i<5);
?> -->
<!-- <?php
$arr=array("A","B","C","D","E");

// for($i=0;$i<4;$i++){
//     echo $arr[$i];
//     echo "<br>";
// }

foreach($arr as $val){
    echo "$val <br>";
}

?> -->

<!-- <?php
echo "Functions<br>";

function pm($marksArr){
    $sum=0;
    $i=0;
    foreach($marksArr as $val){
        $sum+=$val;
        $i++;
    }
    return $sum/$i;
}

//numeric array
$r=[34,65,98,34,67,76];
$s=[98,78,93,93,93,89];
$sumMarks=pm($r);
$sumMarkss=pm($s);
echo "Total marks $sumMarks<br>";
echo "Total marks $sumMarkss<br>";

?> -->

<!-- 
<?php
echo "Date<br>";
// phpDates google manual
$d=date("dS F Y, g:i A");
echo "Today's date $d";
?> -->


<!-- <?php
// Assocative array, indexed arrays

// $arr = array('this', 'that', 'what');
// echo "$arr[0]<br>";
// echo "$arr[1]<br>";
// echo "$arr[1]<br>";
$favCol=array(
    'shub' => 'red',
    'harry' => 'green',
    'raj' => 'black',
     8 =>'this'
);

echo $favCol['shub'];
echo"<br>";
echo $favCol['harry'];
echo"<br>";
echo $favCol['raj'];
echo"<br>";
echo $favCol[8];
echo"<br><br>";

foreach($favCol as $key => $val){
    echo "Fav color of $key is $val<br>";
}
?> -->

<!-- <?php
echo "Multi dimensional array<br>";

$multiDim = array(
                  array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1));

//   echo var_dump($multiDim);
// echo $multiDim[0][0];
// echo $multiDim[0][1];
// echo $multiDim[0][2];
// echo $multiDim[0][3];
// echo $multiDim[0][0];
// echo $multiDim[1][0];
// echo $multiDim[2][0];

// for($i=0;$i<count($multiDim);$i++){
//     echo var_dump($multiDim[$i]);
//     echo"<br>";
// }
for($i=0;$i<count($multiDim);$i++){
    for($j=0;$j<count($multiDim[$i]);$j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo"<br>";
}
?> -->

<?php
echo "Scope,local/ global variables<br>";


//Global : Scope outside of functions
$a=98;

function scope(){
    //Local scope
    // $a=97; ERROR
    global $a; // to access global
    $a=100;
    echo "The val $a<br>";   
}
echo "$a<br>";
scope();
echo "$a<br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
?>