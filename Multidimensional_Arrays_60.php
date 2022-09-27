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

   for($column=0; $column<3; $column++)
   {
        echo $cars[$row][$column]."--";
   }

   echo "</br></br>";
    
  }
  /*
row   column
0     0
      1
      2
      3

1     0
      1 
      2
      3

2     0
      1 
      2
      3
3


  Volvo--22--18--
  BMW--15--13--
  Saab--5--2--
  */
?>