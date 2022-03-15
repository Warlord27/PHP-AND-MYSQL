<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpmyadmin tutorial";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `phptrip` WHERE `dest`='Bihar'";
$result = mysqli_query($conn,$sql);

//usage of WHERE Clause to fetch database
$num = mysqli_num_rows($result);
$no = 0;
echo $num;
echo " record found in Database <br>";

if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no.  ". Hello ". $row[ 'name'] ." welcome to" . $row[ 'dest'];
        echo "<br>";
        $no = $no +1;
    }
}

//Usage of WHERE clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'Tanbir 788585' WHERE `dest` = 4";
//$sql = "UPDATE `phptrip` SET `name` = 'Fromsouth India' WHERE `phptrip`.`slno` = south india";
// echo var_dump($result);
echo"<br>";
$aff = mysqli_affected_rows($conn);
echo "mumber of affected rows:$aff";
echo "<br>";
$result = mysqli_query($conn,$sql);
if($result){
    echo "we updated the record the record successfully";
}
else{
    echo "we could not update the record successfully";
}

?>