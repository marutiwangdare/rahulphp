<!--
The PHP conditional assignment operators are used to set a value depending on conditions:


?:	Ternary	

$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	

??	Null coalescing	

$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7    

-->
<?php

 // Ternary	

 $user=false;
 $status = $user ? "logged in" : "logged out";

 echo '<br> false ? "logged in" : "logged out" = '.$status; 



 $user=true;
 $status = $user ? 10 : 20;

 echo "<br> true ? 10 : 20 = ".$status; 
 
 //Null coalescing	

 $expr1 = 1;
 $expr2 = 2;

 
 $num = $expr1 ?? $expr2;

 echo "<br> $expr1 ?? $expr2 = ".$num;



 $expr1 = null;
 $expr2 = 2;

 $num = $expr1 ?? $expr2;

 echo "<br> $expr1 ?? $expr2 = ".$num;




?>