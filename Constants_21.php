<!-- 

Constants are like variables except that once they are defined they cannot be changed or undefined.

PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant


-->
<?php 
$PI=3.14;
//create a constant with a case-sensitive name:
define("PI",3.14);
echo PI;

//echo "<br>".pi; //not allowed



//define("PI",6.5); //NOT ALLOWED



?>