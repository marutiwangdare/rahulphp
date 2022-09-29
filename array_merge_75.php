<!--
    Definition and Usage
The array_merge() function merges one or more arrays into one array.

Tip: You can assign one array to the function, or as many as you like.

Note: If two or more array elements have the same key, the last one overrides the others.

Note: If you assign only one array to the array_merge() function, and the keys are integers, 
the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).

Tip: The difference between this function and the array_merge_recursive() function is 
when two or more array elements have the same key. Instead of override the keys, 
the array_merge_recursive() function makes the value as an array.
-->
<?php
$a1=array("red","green");
$a2=array("blue","yellow");

$result = array_merge($a1,$a2);

print_r($result);
?>