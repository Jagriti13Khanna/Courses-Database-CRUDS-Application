<?php


$server = "localhost";
$username = "";
$password = "";
$database = "";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// else
// {
//     echo "Connection good";
// }

//This stops SQL Injection in POST vars
foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($conn, $value);
}

//This stops SQL Injection in GEt vars
foreach ($_GET as $key => $value) {
    if(!is_array($_GET)) {
        $_GET[$key] = mysqli_real_escape_string($conn, $value);
    }
}

if(!defined("BASE_URL"))
{
    define("BASE_URL", "http://jkhanna1.dmitstudent.ca/dmit2025/labs/lab4/" );
}

?>