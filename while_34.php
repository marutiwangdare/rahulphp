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


while($x < 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br> whithout equal to <br>";

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
/*
x=6

the number is : 1 
the number is : 2
the number is : 3
the number is : 4
the number is : 5
*/



?>