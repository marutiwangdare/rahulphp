<?php 
function display($num1,$num2)
{
    $sum = $num1 + $num2;

    return $sum;
}

$z = display(10,20);
echo $z;

echo "<br>";

echo display(20,30);
?>