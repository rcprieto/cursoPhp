<?php
$server = "mysql785.umbler.com:41890";
$user = "cursophp";
$pass = "rcp924822";
$database = "cursophp";

$conn = new mysqli($server, $user, $pass, $database);
//mysqli_report(MYSQLI_REPORT_ALL);
//mysqli_report(MYSQLI_REPORT_OFF);

if($conn->connect_error)
{
    echo "Error: " . $conn->connect_error;
    exit;
}


?>