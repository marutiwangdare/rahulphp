<!--
    PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

=> is the separator for associative arrays

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
The named keys can then be used in a script:

Example
-->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43","Rahul"=>"25");

echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>Rahul is ".$age["Rahul"]." Years old.";
?>
