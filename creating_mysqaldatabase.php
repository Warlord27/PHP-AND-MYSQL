<?php
//connecting to database
$servername = "localhost";
$username ="root";
$password ="";

//creating connection

$conn = mysqli_connect($servername,$username,$password);
//die if connection was successful
if (!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "connection was successful<hr>";
}

//create a db
$sql = "CREATE DATABASE Fardin5";
$result =mysqli_query($conn,$sql);
// check for database creation success
if($result){
    echo "the db created successfully! <hr>";
}
else {
    echo"the db is created successfully because of this error --->". mysqli_error($conn);
}

?>