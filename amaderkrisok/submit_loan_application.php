<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = "";    // Replace with your database password
$dbname = "amaderkrisok_register"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $loan_type = $conn->real_escape_string($_POST['loan_type']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $purpose = $conn->real_escape_string($_POST['purpose']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO loan_applications (name, email, phone, loan_type, amount, purpose) 
            VALUES ('$name', '$email', '$phone', '$loan_type', '$amount', '$purpose')";

    if ($conn->query($sql) === TRUE) {
        header("Location:index.php");
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>
