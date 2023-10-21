<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "hkyle533@gmail.com; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: HomePleasure.html"); // Create a thank you page

    // Optionally, you can save form data to a database
}
?>
