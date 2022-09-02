<!--
    PHP while Loop
The while loop - Loops through a block of code as long as the specified condition is true.



Syntax
while (condition is true) {
  code to be executed;
}
-->

<?php

//The example below displays the numbers from 1 to 5:

$x = 1;

echo "<br> <b>whithout equal to</b> <br>";

while($x < 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br> <b>whith equal to</b> <br>";

$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
/*

Example Explained
$x = 1; - Initialize the loop counter ($x), and set the start value to 1
$x <= 5 - Continue the loop as long as $x is less than or equal to 5
$x++; - Increase the loop counter value by 1 for each iteration

x=6

the number is : 1 
the number is : 2
the number is : 3
the number is : 4
the number is : 5
*/

echo "<br> <b>0 to 50 print </b> increase by 10 <br>";

$x = 0;

while($x <= 50) {
  echo "The number is: $x <br>";
  $x+=10;
}
echo "<br> <b> x value after loop <b>: $x"

/*

x=0
x=10
x=20
x=30
x=40
x=50
x=60

the number is : 0
the number is : 10
the number is : 20
the number is : 30
the number is : 40
the number is : 50



Example Explained
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 50 - Continue the loop as long as $x is less than or equal to 100
$x+=10; - Increase the loop counter value by 10 for each iteration
*/


?>