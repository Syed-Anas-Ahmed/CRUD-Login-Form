<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "formdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all records from the table
$sql = "SELECT * FROM userdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $record_id = $row['id'];
        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $phone = $row['phone'];

        echo "<tr>";
        echo "<td>$record_id</td>";
        echo "<td>$fullname</td>";
        echo "<td>$gender</td>";
        echo "<td>$email</td>";
        echo "<td>$phone</td>";
        echo "<td>";
        echo "<form method='POST' action='delete_record.php'>";
        echo "<input type='hidden' name='record_id' value='$record_id'>";
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "</form>";
        echo "<form method='POST' action='update_record.php'>";
        echo "<input type='hidden' name='record_id' value='$record_id'>";
        echo "<input type='submit' name='update' value='Update'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}

$conn->close();
?>