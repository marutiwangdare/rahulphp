<?php 


$numbers = array(4, 6, 2, 22, 11);

$cnt = count($numbers);

echo "<b>before sort</b></br>";
for($i=0; $i<$cnt; $i++)
{
    echo $numbers[$i].", ";
}

sort($numbers);  

echo "</br><b>after sort</b></br>";

for($i=0; $i<$cnt; $i++)
{
    echo $numbers[$i].", ";
}



?>