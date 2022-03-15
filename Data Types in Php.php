<?php 
$name = "Fardin";


/* php data type
1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.NULL

*/
//string - sequence of characters
$friend = "Tanbir";
echo "$name's friend name is $friend";



//Integers - Non decimal number

 $income= "700";
$debts  ="-655";
echo "$income";
echo "$debts";
 
//Float - Decimal point number
$income = 332.2;
$debts = 32.3;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Boolean - can be either true or false

$x ="true";

$is__friend ="false";
echo var_dump($x);
echo "<br>";
echo var_dump($is__friend);
echo "<br>";

// object - Instances of classes
// emoloyee is a class ---> harry can be one object
// arry - used to store multiple values in a single variable
//array start with 0 no unknown value can give error which is not in arry

$friend_list =array("Rohan","Tanbir");
echo var_dump($friend_list);
echo "<br>";
echo $friend_list[0];
echo "<br>";
echo $friend_list[1];
echo "<br>";

//NULL which can reset the value
$name = NULL;
echo var_dump($name);


?>