<!--
    Definition and Usage
The array_diff() function compares the values of two (or more) arrays, and returns the differences.

This function compares the values of two (or more) arrays, 
and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_diff(array1, array2, array3, ...)
-->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("v"=>"yellow");

echo "<br>";
$result=array_diff($a1,$a2,$a3);
print_r($result);

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","d"=>"white");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("v"=>"yellow");

echo "<br>";
$result=array_diff($a1,$a2,$a3);
print_r($result);
?>