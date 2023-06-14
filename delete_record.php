<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "formdb"; 

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the Delete button is clicked for a specific record
if (isset($_POST['delete'])) {
    // Get the record ID to delete
    $record_id = $_POST['record_id'];

    // Delete the specific record from the table
    $sql = "DELETE FROM userdetails WHERE id = '$record_id'";
    if ($conn->query($sql) === TRUE) {
        include('view_records.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
