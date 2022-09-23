<?php declare(strict_types=0); // strict requirement?>
<?php

function addNumbers(float $a, float $b) : string {
  
  $sum = $a + $b;  
  return $sum;
}

$result = addNumbers(1.2, 5.2);

//var_dump($result);

echo $result; 
?>
