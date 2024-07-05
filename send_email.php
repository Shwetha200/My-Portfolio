<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $country = htmlspecialchars($_POST['country']);
    $subject = htmlspecialchars($_POST['subject']);

    // Recipient email
    $to = "skulal386@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission from $firstname $lastname";

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Here are the details:\n";
    $email_body .= "First Name: $firstname\n";
    $email_body .= "Last Name: $lastname\n";
    $email_body .= "Country: $country\n";
    $email_body .= "Message: $subject\n";

    // Email headers
    $headers = "From: noreply@yourdomain.com\n";
    $headers .= "Reply-To: $to";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message successfully sent.";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
