<?php
if (isset($_POST['submit-comment'])) {
    $comment = $_POST['comment'];
    $rating = isset($_POST['rating']) ? $_POST['rating'] : 'Not specified';
    $to = 'bramueljuma19@gmail.com'; // Your email address
    $subject = 'New Comment and Rating';
    $message = "Rating: $rating stars\n\nComment:\n$comment";
    $headers = 'From: comment@yourwebsite.com'; // Change this email address

    mail($to, $subject, $message, $headers);

    // Redirect back to the thank you page or wherever you want after sending the email
    header('Location: thank_you.html'); // Change the URL as needed
    exit;
}
