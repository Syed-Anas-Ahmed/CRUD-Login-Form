<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the Delete All button is clicked
if (isset($_POST['delete_all'])) {
    // Delete all records from the table
    $sql = "DELETE FROM userdetails";
    if ($conn->query($sql) === TRUE) {
        include('view_records.php');
    } else {
        echo "Error deleting records: " . $conn->error;
    }
}

$conn->close();
?>