<!--
    Definition and Usage
The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.

This function compares the keys of two (or more) arrays, 
and return an array that contains the entries from array1 
that are not present in array2 or array3, etc.
-->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>