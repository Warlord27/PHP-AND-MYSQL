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
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);


//find the no of record
$num = mysqli_num_rows($result);
echo $num;
echo " record in the Database <hr>";
//display the rows returned by the sql query
if($num> 0){
    /*$row = mysqli_fetch_assoc($result);
    echo "<hr>";
    echo var_dump($row);
    
    $row = mysqli_fetch_assoc($result);
    echo "<hr>";
    echo var_dump($row);

    $row = mysqli_fetch_assoc($result);
    echo "<hr>";
    echo var_dump($row);

    $row = mysqli_fetch_assoc($result);
    echo "<hr>";
    echo var_dump($row);*/

    //we can fetch in abetter way using the while loop

    while ($row = mysqli_fetch_assoc($result)){
        echo "<hr>";
        // echo var_dump($row);
        echo  $row['slno']  .  " Hello ".   $row[ 'name'] . "welcome to ".  $row['dest'];
    }
}

?>