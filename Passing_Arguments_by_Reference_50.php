<!--
    Passing Arguments by Reference
In PHP, arguments are usually passed by value, 
which means that a copy of the value is used in the function and 
the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, 
changes to the argument also change the variable that was passed in. 
To turn a function argument into a reference, the & operator is used:

Example
Use a pass-by-reference argument to update a variable:
-->

<?php
function add(&$value1, $value2) {
  $value1 = 5;
  $value2 = 5;
}


$num1 = 1;
$num2 = 1;

add($num1,$num2);

echo "num1 = $num1  num2 = $num2";
?>
