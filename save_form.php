<?php

$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "formdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userdetails (fullname, gender, email, phone) VALUES ('$fullname', '$gender', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    include('view_records.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>