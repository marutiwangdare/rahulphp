<!-- 

Variables are "containers" for storing information.

Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:


Note: When you assign a text value to a variable, put quotes around the value.

Note: Unlike other programming languages, 
PHP has no command for declaring a variable. 
It is created the moment you first assign a value to it.


PHP Variables
A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

Example
-->
<?php

$_a=10;
$Aa=20;
$a=20;
$a1=20;
// $1a=20;  not allowed

$i = 10;
$f = 10.20;

$txt = "PHP";
echo "I love $txt!";
echo "<br>";
echo "I Love ".$txt."!";



?>