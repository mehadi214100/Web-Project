<?php
include 'database.php'; // Ensure this file exists and connects to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'];
    $user_name = $_POST['user_name'];
    $contact_number = $_POST['contact_number'];

    // Validate inputs
    if (empty($item_id) || empty($user_name) || empty($contact_number)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit;
    }

    // Insert booking details into the database
    $sql = "INSERT INTO bookings (item_id, user_name, contact_number) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $item_id, $user_name, $contact_number);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='labor_machinery.php';</script>";
    } else {
        echo "<script>alert('Booking failed. Please try again.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
