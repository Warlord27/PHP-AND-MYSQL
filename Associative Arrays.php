<?php 
echo "welcome to the associtive arrys in php";
$arr = array('this','that','what');
echo "<br>";
echo $arr[0];
echo $arr[1];
echo $arr[2];

// associative arrays
//numeric arry it has index or indexed array
$favcol = array('tanbir' => 'red','rohan'  => 'green','harry'  => 'red', 8=>'this'
);
// echo $favcol['tanbir'];
// echo"<br>";
// echo $favcol['rohan'];
// echo"<br>";
// echo $favcol[8];
  
  foreach ($favcol as $key => $value){
      echo "<br>favorite color of $key is $value";
  }
  

?>