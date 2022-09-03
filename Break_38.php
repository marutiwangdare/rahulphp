<!--PHP Break

You have already seen the break statement used in an earlier chapter of this tutorial. 
It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 4:

Example
-->
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
/* 

$x = 0 
$x = 1
$x = 2
$x = 3
$x = 4

the number is: 0
the number is: 1
the number is: 2
the number is: 3
*/
?>