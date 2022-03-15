<?php
echo "welcome to the world of foreach Loops in php<hr>";
$arr = array("bananas","apple","harpic");

// for ($i=0; $i < count($arr); $i++){
//    echo "$arr[$i]" ;
//    echo "<br>";
//}


// better way to do thiis foreach loops
foreach($arr as $value){
echo "$value <hr>";
}
?>