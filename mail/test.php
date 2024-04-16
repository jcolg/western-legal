<?php
$to = "jcolgan19@gmail.com";
$subject = "Test Email";
$message = "This is a test email to verify mail functionality.";
$headers = "From: jcolgan19@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send test email.";
}
?>
