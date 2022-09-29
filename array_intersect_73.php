<!--
    Definition and Usage
The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

This function compares the values of two or more arrays, 
and return an array that contains the entries from array1 that are present in array2, array3, etc.
-->

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);


echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("x"=>"blue");

$result=array_intersect($a1,$a2,$a3);
print_r($result);

echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("x"=>"yellow");

$result=array_intersect($a1,$a2,$a3);
print_r($result);
?>