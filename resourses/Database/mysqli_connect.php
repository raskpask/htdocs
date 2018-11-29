<?php
namespace resourses\Database;

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "tastyRecipes";
$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "INSERT INTO users('user_id','user_password') VALUES('a','a')";
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}