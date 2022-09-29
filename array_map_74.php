<!--
    Definition and Usage
The array_map() function sends each value of an array to a user-made function, 
and returns an array with new values, given by the user-made function.

Tip: You can assign one array to the function, or as many as you like.
-->

<?php
function myfunction($num)
{
  return($num*$num);
}

$a = array(1,2,3);

$result = array_map("myfunction",$a);

print_r($result);

/*

1st time 
num = 1 
1*1
array(1)

2nd time 
num = 2 
2*2
array(1,4)

3rd time 
num = 3 
3*3
array(1,4,9)

*/
?>