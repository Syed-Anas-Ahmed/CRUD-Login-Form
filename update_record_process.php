<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "formdb"; 

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the Update Record button is clicked
if (isset($_POST['update_record'])) {
    // Get the record ID and updated values
    $record_id = $_POST['record_id'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update the specific record in the table
    $sql = "UPDATE userdetails SET fullname = '$fullname', gender = '$gender', email = '$email', phone = '$phone' WHERE id = '$record_id'";
    if ($conn->query($sql) === TRUE) {
        include('view_records.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>