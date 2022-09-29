<!--
    Definition and Usage
The array_diff_assoc() function compares the keys and values of two (or more) arrays, 
and returns the differences.

This function compares the keys and values of two (or more) arrays, 
and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

-->
<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"red","c"=>"green");

$result=array_diff_assoc($a1,$a2);
print_r($result);

echo "<br>";

$a1=array("a"=>"red","b"=>"green","d"=>"white");
$a2=array("a"=>"red","c"=>"green","d"=>"whi");

$result=array_diff_assoc($a1,$a2);
print_r($result);
?>