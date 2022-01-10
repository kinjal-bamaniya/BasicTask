<?php
echo "---------------------------------------------------Task 23-----------------------------------------------------------------------<br>";


for($i=1; $i<=5; $i++) //it will count rows
{
 for($j=5; $j>$i; $j--) //it will add space
  echo "&nbsp;&nbsp;&nbsp;&nbsp;";
 for($k=1; $k<=$i; $k++)
  echo "&nbsp".$k. "&nbsp";
 $n = $k - 1;
 for($m=1; $m<$i; $m++)
  echo "&nbsp".--$n. "&nbsp";
 echo "<br>";
}
?>