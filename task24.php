<?php
echo "---------------------------------------------------Task 24-----------------------------------------------------------------------<br>";

$n = 5;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j<=$i)
        echo $j;
    else
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

for($k=5;$k>=1;$k--){
    if($k>$i)
        echo "";
    else
    echo $k;
}echo "<br>";
}
?>