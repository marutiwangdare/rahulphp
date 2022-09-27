<!--
    We can also put a for loop inside another for loop to get the elements of the $cars array 
    (we still have to point to the two indices):
-->
<?php

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) 
{

 var_dump($cars[$row]);
 echo "</br>";
  
}

/*
row
0
1
2
3
4

 array(3) { [0]=> string(5) "Volvo" [1]=> int(22) [2]=> int(18) } 
 array(3) { [0]=> string(3) "BMW" [1]=> int(15) [2]=> int(13) } 
 array(3) { [0]=> string(4) "Saab" [1]=> int(5) [2]=> int(2) } 
 array(3) { [0]=> string(10) "Land Rover" [1]=> int(17) [2]=> int(15) } 

*/
?>