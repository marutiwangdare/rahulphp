<?php
/*
Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:
*/
$cars = array("Volvo", "BMW", "Toyota");


$clength = count($cars);

echo "<b>before sort:</b><br>";

for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

sort($cars);

echo "<b>after sort:</b><br>";
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}



?>