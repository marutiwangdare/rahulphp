<!--

PHP for Loop
The for loop - Loops through a block of code a specified number of times.

               The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
Parameters:

init counter: Initialize the loop counter value

test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues.
 If it evaluates to FALSE, the loop ends.

increment counter: Increases the loop counter value
-->
<?php 

for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}
/*
Example Explained
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 10; - Continue the loop as long as $x is less than or equal to 10
$x++ - Increase the loop counter value by 1 for each iteration

*/
/*

$x=0
$x=1
$x=2
$x=3
$x=4
$x=5
$x=6

the number is: 0
the number is: 1
the number is: 2
the number is: 3
the number is: 4
the number is: 5


*/

?>