<!--
    PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");

or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

The following example creates an indexed array named $cars, 
assigns three elements to it, and then prints a text containing the array values:

Example
-->

<?php
$cars = array("Volvo", "BMW", "Toyota", "Honda"); //index assigned automatically
echo "I like " . $cars[0] . ", " . $cars[1] . "," . $cars[2].",".$cars[3];

//index assigned manually
$fruits[11]="apple";
$fruits[13]="banana";
$fruits[1]="orange";

echo "<br>I like " . $fruits[11] . ", " . $fruits[13] . "," . $fruits[1];

echo $fruits[0];

?>
