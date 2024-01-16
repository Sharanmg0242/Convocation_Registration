<?php

// Set the target date
$targetDate = strtotime("2024-01-22 00:00:00"); // Adjust the date as needed

// Calculate the time remaining in seconds
$timeRemaining = $targetDate - time();

// If the date is close (you can adjust the threshold), send the message
if ($timeRemaining < 86400) { // 86400 seconds = 1 day
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $subject = "Convocation Reminder";
    $message = "Dear graduate, the convocation day is approaching! We look forward to celebrating this special moment with you.";
    $headers = "From: sharanmg0242@gmail.com"; // Replace with your email address

    // Use the mail() function to send the email
    mail($to, $subject, $message, $headers);
}

?>
