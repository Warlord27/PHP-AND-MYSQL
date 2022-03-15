<?php
/*operators in php
1.Arithmatic operators
2.Assignment operators
3.comparison operators
4.logical operators
*/
// 1.Arithmatic operators
$a =800;
$b =72;
 echo "For a + b, the result is".($a*$b);
 echo "<br>";
 echo "For a + b, the result is".($a+$b);
 echo "<br>";
 echo "For a + b, the result is".($b-$a);
 echo "<br>";
 echo "For a + b, the result is".($a/$b);
 echo "<br>";
 echo "For a + b, the result is".($a%$b);
 echo "<br>";
 echo "For a + b, the result is".($a**$b);
 echo "<br>";

//  2.Assignment operators

$a +=6;
echo "for a,the value is ".$a."<br>";
$a *= 5;
echo "for a, the value is ".$a."<br>";
$a /= 2;
echo "for a, the value is ".$a."<br>";
$a -= 2;
echo "for a, the value is ".$a."<br>";
$a %= 2;
echo "for a, the value is ".$a."<br>";

// 3.comparison  operator
$f = 7;
$e = 7;


echo "For f==e, the result is ";
echo var_dump ($f == $e) . "<br>";
echo "For f>e, the result is ";
echo var_dump ($f > $e) . "<br>";
// not equal to
echo "For f<>e, the result is ";
echo var_dump ($f <> $e) . "<br>";
$z=56;
$y=96;
echo "For z<=y, the result is ";
echo var_dump ($z <= $y) . "<br>";

// logical operator

$m =true;
$n =False;

echo "for m and n , the result is";
echo var_dump($m and $n);

echo"<br>";
// we can write and and or in like this && and || or

echo "for m and n , the result is";
echo var_dump($m or $n);

echo"<br>";

echo "for !m and n , the result is";
echo var_dump(!$m);




?>