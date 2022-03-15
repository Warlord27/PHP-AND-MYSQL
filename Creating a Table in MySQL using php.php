<?php
//connecting to database
$servername = "localhost";
$username ="root";
$password ="";
$database ="fardin 5";

//creating connection
$conn = mysqli_connect($servername,$username,$password);
//die if connection was successful
if (!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "connection was successful<hr>";
}

//create a table in Database
$sql = "CREATE TABLE `phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `trip` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result =mysqli_query($conn,$sql);
// check for the table creation success
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>