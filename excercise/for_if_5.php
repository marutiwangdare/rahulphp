<?php 

for($i=1;$i<=100;$i++)
{
   
    $ans = $i % 2;

    if($ans == 0)
    {
        echo $i."-EVEN";
    }
    else
    {
        echo $i."-ODD";
    }
    ECHO "</br>";
}
/* 
i
1
2
3
4
5



1-ODD
2-EVEN
3-ODD
4-EVEN
5-ODD

*/
?>