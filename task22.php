<?php

echo "---------------------------------------------------Task 22-----------------------------------------------------------------------<br>";
$n = 6;
for($i=$n;$i>=1;$i--){
    for($k=0;$k<$n-$i;$k++){
    echo "&nbsp;";
    }
 for($j=1;$j<=$i;$j++){
      echo $i."&nbsp";
 }
    echo "<br>";
}

for($i=2;$i<=$n;$i++){  
    for($j=$n;$j>$i;$j--)
        echo "&nbsp;";
        for($k=1;$k<=$i;$k++)
            echo $i."&nbsp;";
        
        echo "<br>";
    
}?>