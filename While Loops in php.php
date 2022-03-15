<?php

echo "while loops in php";echo"<br>";
// echo 1;echo"<br>";
// echo 2;echo"<br>";
// echo 3;echo"<br>";
// echo 4;echo"<br>";
// echo 5;echo"<br>"; 
$i = 0;
$x = 1;
while($i<50 && $x<60){
    echo "the value of i is";
    echo $i+1;
    echo "<hr>";
    // we can add html tags
    // we can change the value of I in i+=3 so it will plus by three
    $i++;
    $x+=4;
}

?>