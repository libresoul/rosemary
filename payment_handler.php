<?php
$hostname = 'localhost';
$username = 'sanadee';
$password = '1234';
$db_name = 'payment';

$connection = mysqli_connect($hostname, $username, $password, $db_name);

if($connection) {
    echo "Connected Successfully";
}
else {
    echo "Connection Failed";
}

$name = $_POST["name"];
$address = $_POST["address"];
$number = $_POST["contact_number"];
$price = $_POST["price"];

$query = "insert into payment_details (name, address, contact_number, price) values ('$name', '$address', '$number', '$price')";

mysqli_query($connection, $query);

?>