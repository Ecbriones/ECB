<?php
session_start();
include "database.php"; // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['msg']);

    // Insert message into message_tbl
    $user_id = $_SESSION['account_ID']; // Assuming account_ID is the primary key of your user table
    $sql = "INSERT INTO message_tbl (account_ID, subject, message) VALUES ('$user_id', '$subject', '$message')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['notification'] = "Message sent. Thank you!"; // Set notification
        $_SESSION['message_sent'] = true; // Set flag to indicate message has been sent
        header("Location: index.php"); // Redirect to index.php
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
