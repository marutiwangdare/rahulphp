<!--
    Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:
-->
<?php
$cars = array("Volvo", "BMW", "Toyota");

$clength = count($cars);

echo "<b>before sort:</b><br>";

for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

rsort($cars);

echo "<b>after sort:</b><br>";
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

?>