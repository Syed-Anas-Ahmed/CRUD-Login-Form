<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the Update button is clicked for a specific record
if (isset($_POST['update'])) {
    // Get the record ID
    $record_id = $_POST['record_id'];

    // Retrieve the specific record from the table
    $sql = "SELECT * FROM userdetails WHERE id = '$record_id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $phone = $row['phone'];
        
        echo "<form method='POST' action='update_record_process.php'>";
        echo "<input type='hidden' name='record_id' value='$record_id'>";
        echo "Full Name: <input type='text' name='fullname' value='$fullname'><br>";
        echo "Gender: <input type='text' name='gender' value='$gender'><br>";
        echo "Email: <input type='text' name='email' value='$email'><br>";
        echo "Phone: <input type='text' name='phone' value='$phone'><br>";
        echo "<input type='submit' name='update_record' value='Update'>";
        echo "</form>";
    } else {
        echo "Record not found.";
    }
}
$conn->close();
?>