<!--

PHP do while Loop
The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

The PHP do...while Loop
The do...while loop will always execute the block of code once, it will then check the condition, 
and repeat the loop while the specified condition is true.

Syntax
do {
  code to be executed;
} while (condition is true);

-->
<?php 

/*Examples
The example below first sets a variable $x to 1 ($x = 1). 
Then, the do while loop will write some output, and then increment the variable $x with 1. 
Then the condition is checked (is $x less than, or equal to 5?), 
and the loop will continue to run as long as $x is less than, or equal to 5:
*/

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

/*
$x = 1
$x = 2
$x = 3
$x = 4
$x = 5
$x = 6

the number is : 1
the number is : 2
the number is : 3
the number is : 4
the number is : 5
*/

// comapare while and do while loop

$x=7;

while($x < 6)
{
    echo "number is : $x";
}

do{
    echo "number is : $x";

}while($x < 6);



?>