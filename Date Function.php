<?php
echo"wecome to date <hr>";
$d = date ("d S F Y,g:i A");
echo "todays date is $d <hr>";
echo date("l js \of F Y h:i:s:A");
echo "July l,2000 is on a <hr>" .date("l", mktime(0,0,0,7,0,2000));

echo date ("l js \of F Y h:i:s A");

$year = date("y");
echo"<hr>";
echo"copiright $year | All rights reserved <hr>";

?>