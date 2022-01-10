<?php
$n = 7;

for($i=1;$i<=$n;$i++){
    if($i%2==0){
        continue;
    }
    for ($k = 1; $k <= $n - $i; $k++) {
        echo "&nbsp";
     }
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
    echo("<br>");

}
for($i=$n-2;$i>=1;$i--){
        if($i%2==0){
            continue;
        }
        for ($k = 1; $k <= $n - $i; $k++) {
            echo("&nbsp");
         }
        for($j=1;$j<=$i;$j++){
            echo($j);
        }
        echo("<br>");
        
}
?>