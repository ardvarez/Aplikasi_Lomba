<?php
$host = "localhost";
$username = "root";
$password = "";
$namadatabase = "";
$con = @mysqli_connect($host, $username, $password, $namadatabase);

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';
?>