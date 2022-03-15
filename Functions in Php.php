<?php

echo"welcome to php tutorials on function <hr>";

function processMarks($marksArr){
$sum = 0;
foreach ($marksArr as $value){
    $sum += $value;
    }
    return $sum;
}
function avgMarks($marksArr){
$sum = 0;
$l = 1;
foreach ($marksArr as $value){
    $sum += $value;
    $l++;
    }
    return $sum/$l;
}
echo "total marks<hr>";

$RohanDas = [34,98,56,58,78,99];
$sumMark  = processMarks($RohanDas);
echo "total mark scored buy Rohan out of 600 is $sumMark <hr>";

echo "average marks<hr>";

$Tanbir = [99,98,56,100,78,99];
// $sumMarkTanbir  = processMark($Tanbir);
$sumMarksTanbir  = avgMarks($Tanbir);
echo "total mark scored buy Tanbir out of 600 is $sumMarksTanbir <hr>";

/*for ($i=0; $i <count(arr); $i++)*/



?>